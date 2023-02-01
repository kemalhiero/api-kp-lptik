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
    public function list_mahasiswa_bimbingan()
    {

        $nip_dosen = Auth::user()->username;
        $pa_kah = DB::table('dosen')->select('dosen.status_pa')->where('nip', $nip_dosen)->first();

        if ($pa_kah->status_pa==true) {
            $list = Bimbingan::select( 'mahasiswa.id AS id_mahasiswa', 'mahasiswa.nama_mahasiswa', 'mahasiswa.nim', 'mahasiswa.alamat', 'mahasiswa.email', 'mahasiswa.no_hp', 'mahasiswa.status_mhs', 'dosen.nama_dosen')
            ->join('dosen', 'id_dosen', '=', 'dosen.id')
            ->join('mahasiswa', 'id_mhs', '=', 'mahasiswa.id')
            ->where('dosen.nip', $nip_dosen)
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

    public function detail_mahasiswa_pa($nim_mahasiswa)
    {
        $detail = DB::table('mahasiswa')
        ->select('mahasiswa.id AS id_mahasiswa', 'mahasiswa.nama_mahasiswa', 'mahasiswa.nim', 'mahasiswa.alamat', 'mahasiswa.email', 'mahasiswa.no_hp', 'mahasiswa.status_mhs', 'jurusan.nama_jur', 'fakultas.nama_fak')
        ->join('jurusan', 'id_jur', '=', 'jurusan.id')
        ->join('fakultas', 'id_fak', '=', 'fakultas.id')
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
        ->select('dosen.id AS id_dosen', 'dosen.nama_dosen', 'dosen.jenis_kelamin', 'dosen.nip', 'dosen.alamat', 'dosen.email', 'dosen.status_pa', 'jurusan.nama_jur', 'fakultas.nama_fak')
        ->join('jurusan', 'id_jur', '=', 'jurusan.id')
        ->join('fakultas', 'id_fak', '=', 'fakultas.id')
        ->where('dosen.nip', $nip_dosen)
        ->first();

        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->data = $profil;

        return response()->json($respon);
    }

    public function list_mata_kuliah()
    {

        $nip_dosen = Auth::user()->username;

        DB::statement("SET SQL_MODE=''");

        $matkul = DB::table('jadwal')
        ->groupBy('jadwal.id_mk')
        ->join('dosen', 'id_dosen', '=', 'dosen.id')
        ->join('mata_kuliah', 'id_mk', '=', 'mata_kuliah.id')
        ->select('mata_kuliah.id AS id_matkul', 'mata_kuliah.reg_mk', 'mata_kuliah.nama_mk')
        ->where('dosen.nip', $nip_dosen)
        ->get();

        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->count = $matkul->count();
        $respon->data = $matkul;

        return response()->json($respon);

    }

    public function detail_mata_kuliah($id_matkul)
    {
        $nip_dosen = Auth::user()->username;

        $detail = DB::table('jadwal')
        ->select('mata_kuliah.id AS id_matkul', 'mata_kuliah.reg_mk', 'mata_kuliah.nama_mk', 'mata_kuliah.sks', 'dosen.id AS id_dosen')
        ->join('dosen', 'id_dosen', '=', 'dosen.id')
        ->join('mata_kuliah', 'id_mk', '=', 'mata_kuliah.id')
        ->where('mata_kuliah.id', $id_matkul)
        ->where('dosen.nip', $nip_dosen)
        ->first();

        $id_dosen = $detail->id_dosen;
        
        $jadwal_dosen = DB::table('jadwal')
        ->select('hari.nama_hari', 'jam.jam_kuliah', 'ruang.kode_ruang')
        ->join('mata_kuliah', 'id_mk', '=', 'mata_kuliah.id')
        ->join('ruang', 'id_ruang', '=', 'ruang.id')
        ->join('hari', 'id_hari', '=', 'hari.id')
        ->join('jam', 'id_jam', '=', 'jam.id')
        ->where('mata_kuliah.id', $id_matkul)
        ->where('jadwal.id_dosen', $id_dosen)
        ->get();

        $detail->jadwal = $jadwal_dosen;

        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->data = $detail;

        return response()->json($respon);
    }
    
    public function tampil_khs_mahasiswa($nim_mahasiswa)
    {
        $khs= DB::table('semester')
        ->join('mahasiswa', 'semester.id_mhs', '=', 'mahasiswa.id')
        ->select('semester.*', 'mahasiswa.nama_mahasiswa', 'mahasiswa.nim')
        ->where('mahasiswa.nim', $nim_mahasiswa)
        ->get();

        $data = new stdClass;
        $data->count = $khs->count();
        $data->detail = $khs;

        return response()->json($data);
    }

    public function detail_khs($nim_mahasiswa, $semester)
    {
        $khs= DB::table('semester')
        ->join('mahasiswa', 'semester.id_mhs', '=', 'mahasiswa.id')
        ->join('khs', 'semester.id', '=', 'khs.id_smt')
        ->join('mata_kuliah', 'khs.id_mk', '=', 'mata_kuliah.id')
        ->select('khs.id', 'khs.nilai_angka', 'khs.nilai_huruf', 'mata_kuliah.reg_mk', 'mata_kuliah.nama_mk', 'mata_kuliah.sks')
        ->where([
            ['mahasiswa.nim', $nim_mahasiswa],
            ['semester.semester', $semester]
            ])
        ->get();

        $data = new stdClass;
        $data->count = $khs->count();
        $data->detail_khs = $khs;

        return response()->json($data);
    }

}
