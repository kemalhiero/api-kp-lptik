<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;
<<<<<<< HEAD
=======

>>>>>>> master
class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Fakultas::insert([
            ['nama_fak' => 'Teknologi Informasi'],
            ['nama_fak' => 'Kedokteran'],
            ['nama_fak' => 'Teknik'],
            ['nama_fak' => 'Ekonomi']
        ]);
      
=======
        Fakultas::create(['nama_fak' => 'Teknologi Informasi']);
        Fakultas::create(['nama_fak' => 'Kedokteran']);
        Fakultas::create(['nama_fak' => 'Teknik']);
        Fakultas::create(['nama_fak' => 'Ekonomi']);
>>>>>>> master
    }
}
