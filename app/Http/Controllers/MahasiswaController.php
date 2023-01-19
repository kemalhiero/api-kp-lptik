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
            ->select('krs.*', 'jadwal.*')
            ->where('mahasiswa.nim', $username)
        ->get();
            
        $data = new stdClass;
        $data->count = $krs->count();
        $data->datetime = Carbon::now();
        $data->detail = $krs;

        return response()->json($data);
      
    }
   
    public function detailMatkul($id_matkul)
    {

        $detail = DB::table('jadwal')
        ->select('mata_kuliah.*', 'dosen.nama_dosen', 'jadwal.id_krs', 'jadwal.waktu', 'ruang.kode_ruang')
        ->join('krs', 'id_krs', '=', 'krs.id')
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

    public function showSemester()
    {
    
        $username= Auth::user()->getUsername();

        $khs= DB::table('semesters')
            ->join('mahasiswa', 'semesters.id_mhs', '=', 'mahasiswa.id')
            ->select('semesters.*')
            ->where('mahasiswa.nim', $username)
        ->get();
            
        $data = new stdClass;
        $data->count = $khs->count();
        $data->datetime = Carbon::now();
        $data->detail = $khs;

        return response()->json($data);

    }

    public function showKhs($idSemester)
    {
    
        $username = Auth::user()->getUsername();

        $khs= DB::table('semesters')
            ->join('mahasiswa', 'semesters.id_mhs', '=', 'mahasiswa.id')
            ->join('khs', 'semesters.id', '=', 'khs.id_smt')
            ->select('semesters.*', 'khs.*')
            ->where([
                ['mahasiswa.nim', $username],
                ['semesters.semester', $idSemester]
             ])
        ->get();
            
        $data = new stdClass;
        $data->count = $khs->count();
        $data->datetime = Carbon::now();
        $data->detail = $khs;

        return response()->json($data);

    }

}
