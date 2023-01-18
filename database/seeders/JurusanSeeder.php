<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;
>>>>>>> master

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Jurusan::insert([
            ['nama_jur' => 'Sistem Informasi'],
            ['nama_jur' => 'Teknik Komputer'],
            ['nama_jur' => 'Manajemen'],
            ['nama_jur' => 'Teknik Sipil'],
            ['nama_jur' => 'Teknik Elektro'],
            ['nama_jur' => 'Teknik Lingkungan'],
            ['nama_jur' => 'Pendidikan Dokter']
        ]);
=======
        Jurusan::create(['nama_jur' => 'Sistem Informasi']);
        Jurusan::create(['nama_jur' => 'Teknik Komputer']);
        Jurusan::create(['nama_jur' => 'Manajemen']);
        Jurusan::create(['nama_jur' => 'Teknik Sipil']);
        Jurusan::create(['nama_jur' => 'Teknik Elektro']);
        Jurusan::create(['nama_jur' => 'Teknik Lingkungan']);
        Jurusan::create(['nama_jur' => 'Pendidikan Kedokteran']);
>>>>>>> master
    }
}
