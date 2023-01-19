<?php

namespace Database\Seeders;

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
        Jadwal::insert([
            [
                'id_krs' => 1,
                'id_ruang' => 1,
                'id_mk' => 2,
                'id_dosen' => 1,
                'waktu' => date('2023-01-16 15:16:19'),
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 2,
                'id_mk' => 4,
                'id_dosen' => 1,
                'waktu' => date('2023-01-17 15:16:19'),
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 3,
                'id_mk' => 1,
                'id_dosen' => 3,
                'waktu' => date('2023-01-18 15:16:19'),
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 2,
                'id_mk' => 1,
                'id_dosen' => 4,
                'waktu' => date('2023-01-17 15:16:19'),
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 2,
                'id_mk' => 1,
                'id_dosen' => 5,
                'waktu' => date('2023-01-15 15:16:19')
                
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 4,
                'id_mk' => 6,
                'id_dosen' => 3,
                'waktu' => date('2023-01-17 15:16:19'),
            ],
            [
                'id_krs' => 1,
                'id_ruang' => 4,
                'id_mk' => 5,
                'id_dosen' => 3,
                'waktu' => date('2023-01-17 15:16:19'),
             ]
        ]);
        

    }
}
