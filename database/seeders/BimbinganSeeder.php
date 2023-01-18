<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bimbingan;

class BimbinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bimbingan::create([
            'id_dosen' => 1,
            'id_mhs' => 6,
        ]);
        Bimbingan::create([
            'id_dosen' => 1,
            'id_mhs' => 7,
        ]);
        Bimbingan::create([
            'id_dosen' => 3,
            'id_mhs' => 8,
        ]);
        Bimbingan::create([
            'id_dosen' => 3,
            'id_mhs' => 6,
        ]);
    }
}
