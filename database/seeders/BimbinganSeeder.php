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
            'kode_jur' => 1,
            'kode_fak' => 1,
            'id_mhs' => 1,
        ]);
    }
}
