<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ruang;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruang::insert([
            ['kode_ruang' => 'H 2.9'],
            ['kode_ruang' => 'H 2.3'],
            ['kode_ruang' => 'F 2.3'],
            ['kode_ruang' => 'E 2.3'],
            ['kode_ruang' => 'E 2.2']

        ]);
    }
}
