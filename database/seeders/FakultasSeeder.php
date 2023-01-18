<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;
class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fakultas::insert([
            ['nama_fak' => 'Teknologi Informasi'],
            ['nama_fak' => 'Kedokteran'],
            ['nama_fak' => 'Teknik'],
            ['nama_fak' => 'Ekonomi']
        ]);
      
    }
}
