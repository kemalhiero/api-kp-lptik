<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DosenController extends Controller
{
    public function listMahasiswaBimbingan($nip_dosen)
    {
        $list = Bimbingan::select( 'mahasiswa.id AS id_mahasiswa', 'mahasiswa.nama_mahasiswa', 'mahasiswa.nim', 'mahasiswa.alamat', 'mahasiswa.email', 'mahasiswa.no_hp', 'mahasiswa.status_mhs', 'dosen.nama_dosen')
        ->join('dosen', 'id_dosen', '=', 'dosen.id')
        ->join('mahasiswa', 'id_mhs', '=', 'mahasiswa.id')
        ->where('dosen.nip', $nip_dosen)
        ->get();

        $respon = new stdClass;
        $respon->message = 'sukses';
        $respon->count = $list->count();
        $respon->data = $list;

        return response()->json($respon);
    }

    public function detailMahasiswaPA($nim_mahasiswa)
    {
        $detail = DB::table('mahasiswa')
        ->select('mahasiswa.id AS id_mahasiswa', 'mahasiswa.nama_mahasiswa', 'mahasiswa.nim', 'mahasiswa.alamat', 'mahasiswa.email', 'mahasiswa.no_hp', 'mahasiswa.status_mhs', 'jurusan.nama_jur', 'fakultas.nama_fak')
        ->join('jurusan', 'id_jur', '=', 'jurusan.id')
        ->join('fakultas', 'id_fak', '=', 'fakultas.id')
        ->where('mahasiswa.nim', $nim_mahasiswa)
        ->first();

        $respon = new stdClass;
        $respon->message = 'sukses';
        $respon->data = $detail;

        return response()->json($respon);
    }
}
