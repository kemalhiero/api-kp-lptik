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
        Bimbingan::insert([
            [
            'id_dosen' => 1,
            'id_mhs' => 1,
        ], [
            'id_dosen' => 1,
            'id_mhs' => 2,
        ], [
            'id_dosen' => 5,
            'id_mhs' => 3,
        ], [
            'id_dosen' => 5,
            'id_mhs' => 4,
        ]
    ]);
    }
}
