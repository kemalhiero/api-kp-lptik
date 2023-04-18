<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use stdClass;

class DosenController extends Controller
{
    public function list_mahasiswa_bimbingan() {

        $nip_dosen = Auth::user()->username;
        $pa_kah = DB::table('dosen')->select('dosen.status_pa')->where('nip', $nip_dosen)->first();

        if ($pa_kah->status_pa==1) {
            $list = DB::table('mahasiswa_bimbingan')
            ->select( 'mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'mahasiswa.jenis_kelamin', 'mahasiswa.alamat', 'mahasiswa.email', 'mahasiswa.no_hp', 'mahasiswa.status_mhs')
            ->join('bimbingan', 'bimbingan_id', '=', 'bimbingan.id')
            ->join('mahasiswa', 'nim', '=', 'mahasiswa.nim')
            ->where('bimbingan.nip', $nip_dosen)
            ->get();

            $respon = new stdClass;
            $respon->message = 'sukses ambil data';
            $respon->count = $list->count();
            $respon->data = $list;
        }
        else{
            $respon = new stdClass;
            $respon->message = 'sukses ambil data';
            $respon->count = 0;
            $respon->data = 'Bukan dosen PA';

        }
        
        return response()->json($respon);
    }

    public function detail_mahasiswa_pa($nim_mahasiswa) {
        $detail = DB::table('mahasiswa')
        ->select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'mahasiswa.jenis_kelamin', 'mahasiswa.alamat', 'mahasiswa.email', 'mahasiswa.no_hp', 'mahasiswa.status_mhs', 'prodi.nama_jur', 'fakultas.nama')
        ->join('prodi', 'mahasiswa.prodi_id', '=', 'prodi.id')
        ->join('fakultas', 'prodi.fakultas_id', '=', 'fakultas.uuid')
        ->where('mahasiswa.nim', $nim_mahasiswa)
        ->first();

        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->data = $detail;

        return response()->json($respon);
    }

    public function profil_dosen()
    {
        $nip_dosen = Auth::user()->username;

        $profil = DB::table('dosen')
        ->select('dosen.nip', 'dosen.nama', 'dosen.jenis_kelamin',  'dosen.alamat', 'dosen.email', 'dosen.no_hp', 'dosen.status_pa')
        ->where('dosen.nip', $nip_dosen)
        ->first();

        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->data = $profil;

        return response()->json($respon);
    }

    public function list_mata_kuliah() {

        $nip_dosen = Auth::user()->username;

        DB::statement("SET SQL_MODE=''");

        $matkul = DB::table('kelas')
        ->groupBy('kelas.kode_matkul')
        ->join('dosen_pengampu', 'id', '=', 'dosen_pengampu.kelas_id')
        ->join('matkul', 'kode_matkul', '=', 'matkul.kode_matkul')
        ->select('kode_matkul AS reg_mk', 'matkul.nama_matkul AS nama_mk', 'matkul.jenis')
        ->where('dosen_pengampu.nip', $nip_dosen)
        ->get();

        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->count = $matkul->count();
        $respon->data = $matkul;

        return response()->json($respon);

    }

    public function detail_mata_kuliah($kode_matkul) {
        $nip_dosen = Auth::user()->username;

        $detail = DB::table('matkul')
        ->select('matkul.kode_matkul', 'matkul.nama_matkul', 'matkul.sks_matkul', 'matkul.sks_matkul' )
        ->where('mata_kuliah.id', $kode_matkul)
        ->first();
        
        // $id_dosen = $detail->id_dosen;
        
        $jadwal_dosen = DB::table('dosen_pengampu')
        ->select('kelas.hari', 'kelas.jam_mulai', 'kelas.jam_selesai', 'kelas.nama_kelas',)
        ->join('kelas', 'kelas_id', '=', 'kelas.id')
        ->join('ruang', 'kelas.kode_ruang', '=', 'ruang.kode_ruang')
        ->where('kelas.kode_matkul', $kode_matkul)
        ->where('dosen_pengampu.nip', $nip_dosen)
        ->get();

        $detail->jadwal = $jadwal_dosen;

        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->data = $detail;

        return response()->json($respon);
    }
    
    public function tampil_khs_mahasiswa($nim_mahasiswa) { //jumlah sks yg diambil dan ip per semester
        // $khs = DB::table('studi_mhs')
        // ->groupBy('studi_mhs.nim', 'studi_mhs.semester_mhs')
        // ->join('kelas', 'studi_mhs.kelas_id', '=', 'kelas.id')
        // ->join('matkul', 'kelas.kode_matkul', '=', 'matkul.kode_matkul')
        // // ->select('', 'mahasiswa.nama_mahasiswa', 'mahasiswa.nim')
        // ->sum('matkul.sks_matkul')
        // ->where('studi_mhs.nim', $nim_mahasiswa)
        // ->get();

        $khs = DB::table('studi_mhs')
                ->join('kelas', 'studi_mhs.kelas_id', '=', 'kelas.id')
                ->join('matkul', 'kelas.kode_matkul', '=', 'matkul.kode_matkul')
                ->select('studi_mhs.semester_mhs', 
                    DB::raw('SUM(matkul.sks_matkul) as total_sks'),
                    DB::raw('SUM(matkul.sks_matkul * (studi_mhs.nilai/25)) / SUM(matkul.sks_matkul) AS ip_semester'))
                ->groupBy('studi_mhs.nim_mahasiswa', 'studi_mhs.semester_mhs')
                ->where('studi_mhs.nim', $nim_mahasiswa)
                ->get();


        $data = new stdClass;
        $data->count = $khs->count();
        $data->detail = $khs;

        return response()->json($data);
    }

    public function detail_khs($nim_mahasiswa, $semester) {
        // $khs= DB::table('semester')
        // ->join('mahasiswa', 'semester.id_mhs', '=', 'mahasiswa.id')
        // ->join('khs', 'semester.id', '=', 'khs.id_smt')
        // ->join('mata_kuliah', 'khs.id_mk', '=', 'mata_kuliah.id')
        // ->select('khs.id', 'khs.nilai_angka', 'khs.nilai_huruf', 'mata_kuliah.reg_mk', 'mata_kuliah.nama_mk', 'mata_kuliah.sks')
        // ->where([
        //     ['mahasiswa.nim', $nim_mahasiswa],
        //     ['semester.semester', $semester]
        //     ])
        // ->get();

        $khs = DB::table('studi_mhs')
                ->join('kelas', 'studi_mhs.kelas_id', '=', 'kelas.id')
                ->join('matkul', 'kelas.kode_matkul', '=', 'matkul.kode_matkul')
                ->select('matkul.kode_matkul', 'matkul.nama_matkul', 'matkul.sks_matkul', 'studi_mhs.nilai')
                ->where('studi_mhs.semester_mhs', '=', $semester)
                ->where('studi_mhs.nim_mahasiswa', '=', $nim_mahasiswa)
                ->get();

        $data = new stdClass;
        $data->count = $khs->count();
        $data->detail_khs = $khs;

        return response()->json($data);
    }

}
