<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::create([
            'reg_mk' => 'BD',
            'nama_mk' => 'Basis Data',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'reg_mk' => 'PWEB',
            'nama_mk' => 'Pemrograman Web',
            'sks' => '3'
        ]);
        
        MataKuliah::create([
            'reg_mk' => 'PBD',
            'nama_mk' => 'Perancangan Basis Data',
            'sks' => '4'
        ]);
        
        MataKuliah::create([
            'reg_mk' => 'PTB',
            'nama_mk' => 'Pemrograman Teknologi Bergerak',
            'sks' => '3'
        ]);
        
        MataKuliah::create([
            'reg_mk' => 'ISI',
            'nama_mk' => 'Inovasi Sistem Informasi',
            'sks' => '3'
        ]);
    }
}
