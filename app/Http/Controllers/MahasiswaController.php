<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use stdClass;

class MahasiswaController extends Controller
{
 
    public function profilMahasiswa()
    {
        $username = Auth::user()->getUsername();
        $matkul = DB::table('mahasiswa')->where('nim', $username)->first();
        
        if($matkul){
            $data = new stdClass;
            $data->message = "Berhasil mendapatkan data";
            $data->datetime = Carbon::now();
            $data->profil = $matkul;
            return response()->json($data);
        }
    }
    

    public function showKrs()
    {
        $username = Auth::user()->getUsername();

        $krs= DB::table('krs')
            ->join('mahasiswa', 'krs.id_mhs', '=', 'mahasiswa.id')
            ->join('jadwal', 'krs.id', '=', 'jadwal.id_krs')
            ->join('ruang', 'jadwal.id_ruang', '=', 'ruang.id')
            ->join('mata_kuliah', 'jadwal.id_mk', '=', 'mata_kuliah.id')
            ->join('hari', 'jadwal.id_hari', '=', 'hari.id')
            ->join('jam', 'jadwal.id_jam', '=', 'jam.id')
            ->select('jadwal.id_mk', 'ruang.kode_ruang', 'mata_kuliah.reg_mk', 'mata_kuliah.nama_mk', 'mata_kuliah.sks', 'hari.nama_hari','jam.jam_kuliah')
            ->where('mahasiswa.nim', $username)
        ->get();

        $semester = DB::table('krs')
            ->join('mahasiswa', 'krs.id_mhs', '=', 'mahasiswa.id')
            ->select('krs.semester')
            ->where('mahasiswa.nim', $username)
            ->first();
            
        $data = new stdClass;
        $data->count = $krs->count();
        $data->datetime = Carbon::now();
        $data->semester = $semester->semester;
        $data->detail = $krs;

        return response()->json($data);
      
    }
   
    public function detailMatkul($id_matkul)
    {

        $detail = DB::table('jadwal')
        ->select('mata_kuliah.id', 'mata_kuliah.reg_mk', 'mata_kuliah.nama_mk', 'mata_kuliah.sks', 'dosen.nama_dosen','hari.nama_hari', 'jam.jam_kuliah', 'ruang.kode_ruang')
        ->join('krs', 'id_krs', '=', 'krs.id')
        ->join('dosen', 'id_dosen', '=', 'dosen.id')
        ->join('mata_kuliah', 'id_mk', '=', 'mata_kuliah.id')
        ->join('ruang', 'id_ruang', '=', 'ruang.id')
        ->join('hari', 'id_hari', '=', 'hari.id')
        ->join('jam', 'id_jam', '=', 'jam.id')
        ->where('mata_kuliah.id', $id_matkul)
        ->first();

        $respon = new stdClass;
        $respon->message = 'sukses ambil data';
        $respon->data = $detail;
        return response()->json($respon);

    }

    public function list_khs()
    {
    
        $username= Auth::user()->getUsername();

        $khs= DB::table('semester')
            ->join('mahasiswa', 'semester.id_mhs', '=', 'mahasiswa.id')
            ->select('semester.id', 'semester.semester', 'semester.jumlah_sks', 'semester.ips')
            ->where('mahasiswa.nim', $username)
        ->get();
            
        $data = new stdClass;
        $data->count = $khs->count();
        $data->datetime = Carbon::now();
        $data->detail = $khs;

        return response()->json($data);

    }

    public function detail_khs($idSemester)
    {
    
        $username = Auth::user()->getUsername();

        $khs= DB::table('khs')
            ->join('semester', 'khs.id_smt', '=', 'semester.id')
            ->join('mata_kuliah', 'id_mk', '=', 'mata_kuliah.id')
            ->join('mahasiswa', 'semester.id_mhs', '=', 'mahasiswa.id')
            ->select('mata_kuliah.nama_mk','mata_kuliah.sks', 'khs.nilai_angka', 'khs.nilai_huruf')
            ->where([
                ['mahasiswa.nim', $username],
                ['semester.semester', $idSemester]
             ])
        ->get();
            
        $data = new stdClass;
        $data->count = $khs->count();
        $data->datetime = Carbon::now();
        $data->detail = $khs;

        return response()->json($data);

    }

}
