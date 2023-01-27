<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert([
            [
                'id_krs' => 1,
                'id_ruang' => 1,
                'id_mk' => 2,
                'id_dosen' => 1,
                'id_hari' => 3,
                'id_jam' => 1
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 2,
                'id_mk' => 4,
                'id_dosen' => 1,
                'id_hari' => 3,
                'id_jam' => 4
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 3,
                'id_mk' => 1,
                'id_dosen' => 3,
                'id_hari' => 2,
                'id_jam' => 4
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 2,
                'id_mk' => 1,
                'id_dosen' => 2,
                'id_hari' => 4,
                'id_jam' => 1
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 2,
                'id_mk' => 1,
                'id_dosen' => 5,
                'id_hari' => 5,
                'id_jam' => 2
                
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 4,
                'id_mk' => 6,
                'id_dosen' => 3,
                'id_hari' => 1,
                'id_jam' => 2
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 4,
                'id_mk' => 5,
                'id_dosen' => 3,
                'id_hari' => 2,
                'id_jam' => 1
             ]
        ]);
        

    }
}
