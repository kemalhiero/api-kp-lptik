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
            'id_mhs' => 1,
        ]);
        Bimbingan::create([
            'id_dosen' => 1,
            'id_mhs' => 2,
        ]);
        Bimbingan::create([
            'id_dosen' => 3,
            'id_mhs' => 3,
        ]);
        Bimbingan::create([
            'id_dosen' => 3,
            'id_mhs' => 4,
        ]);
    }
}
