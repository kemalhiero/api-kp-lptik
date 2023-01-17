<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create([
            'id_ruang' => 1,
            'id_mk' => 2,
            'id_dosen' => 1,
            'id_krs' => 1,
            'waktu' => 'Senin (10:00 - 14:40)',
        ]);
        
        Jadwal::create([
            'id_ruang' => 2,
            'id_mk' => 4,
            'id_dosen' => 1,
            'id_krs' => 1,
            'waktu' => 'Selasa (13:30 - 15:10)',
        ]);
 
        Jadwal::create([
            'id_ruang' => 2,
            'id_mk' => 1,
            'id_dosen' => 2,
            'id_krs' => 1,
            'waktu' => 'Senin (13:30 - 15:10)',
        ]);

        Jadwal::create([
            'id_ruang' => 1,
            'id_mk' => 6,
            'id_dosen' => 3,
            'id_krs' => 1,
            'waktu' => 'Rabu (13:30 - 15:10)',
        ]);

        Jadwal::create([
            'id_ruang' => 4,
            'id_mk' => 5,
            'id_dosen' => 4,
            'id_krs' => 1,
            'waktu' => 'Selasa (13:30 - 15:10)',
        ]);
    }
}
