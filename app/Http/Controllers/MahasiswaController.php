<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use stdClass;

class MahasiswaController extends Controller
{
 
    public function profilMahasiswa()
    {

        $mahasiswa = Mahasiswa::get();

        $id = Auth::user()->getId();

        $matkul = DB::table('mahasiswa')->where('id_user', $id)->first();
        
        if($matkul){
            $data = new stdClass;
            $data->count = $mahasiswa->count();
            $data->datetime = Carbon::now();
            $data->profil = $matkul;
            return response()->json($data);
        }

    }

    public function tampil()
    {
        $id = Auth::user()->getId();

        $krs= DB::table('krs')
            ->join('mahasiswa', 'krs.id_mhs', '=', 'mahasiswa.id')
            ->join('jadwal', 'krs.id_krs', '=', 'jadwal.id_krs')
            ->select('krs.*', 'jadwal.*')
            ->where('mahasiswa.id_user', $id)
        ->get();
            
        $data = new stdClass;
        $data->count = $krs->count();
        $data->datetime = Carbon::now();
        $data->detail = $krs;

        return response()->json($data);
      
    }
   
    public function detailMatkul($id_matkul)
    {
        
        // $krs = Krs::whereRelation('jadwal', 'id_mk', '=', $id)->get();
        // if($krs){
        //     return response()->json($krs);
        // }else{
        //     return response()->json('Data Tidak ada');
        // }

        $matkul = DB::table('mata_kuliah')->where('id_mk', $id_matkul)->first();
        return response()->json($matkul);

    }

    public function showSemester()
    {
        
        // $krs = Krs::whereRelation('jadwal', 'id_mk', '=', $id)->get();
        // if($krs){
        //     return response()->json($krs);
        // }else{
        //     return response()->json('Data Tidak ada');
        // }

        $id = Auth::user()->getId();

        $khs= DB::table('semesters')
            ->join('mahasiswa', 'semesters.id_mhs', '=', 'mahasiswa.id')
            ->select('semesters.*')
            ->where('mahasiswa.id_user', $id)
        ->get();
            
        $data = new stdClass;
        $data->count = $khs->count();
        $data->datetime = Carbon::now();
        $data->detail = $khs;

        return response()->json($data);

    }

    public function showKhs($idSemester)
    {
        
        // $krs = Krs::whereRelation('jadwal', 'id_mk', '=', $id)->get();
        // if($krs){
        //     return response()->json($krs);
        // }else{
        //     return response()->json('Data Tidak ada');
        // }

        $id = Auth::user()->getId();

        $khs= DB::table('semesters')
            ->join('mahasiswa', 'semesters.id_mhs', '=', 'mahasiswa.id')
            ->join('khs', 'semesters.id', '=', 'khs.id_smt')
            ->select('semesters.*', 'khs.*')
            ->where([
                ['mahasiswa.id_user', $id],
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
