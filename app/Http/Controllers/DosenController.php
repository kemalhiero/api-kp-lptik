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

        if ($pa_kah->status_pa=='y') {
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

        $matkul = DB::table('jadwal')
        ->select('jadwal.id AS id_jadwal','mata_kuliah.id AS id_matkul', 'mata_kuliah.nama_mk', 'jadwal.waktu', 'ruang.kode_ruang')
        ->join('dosen', 'id_dosen', '=', 'dosen.id')
        ->join('mata_kuliah', 'id_mk', '=', 'mata_kuliah.id')
        ->join('ruang', 'id_ruang', '=', 'ruang.id')
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
        $detail = DB::table('jadwal')
        ->select('mata_kuliah.id AS id_matkul', 'mata_kuliah.reg_mk', 'mata_kuliah.nama_mk', 'mata_kuliah.sks', 'dosen.nama_dosen', 'jadwal.waktu', 'ruang.kode_ruang')
        ->join('dosen', 'id_dosen', '=', 'dosen.id')
        ->join('mata_kuliah', 'id_mk', '=', 'mata_kuliah.id')
        ->join('ruang', 'id_ruang', '=', 'ruang.id')
        ->where('mata_kuliah.id', $id_matkul)
        ->first();
        
        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->data = $detail;

        return response()->json($respon);
    }

}
