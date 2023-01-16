<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create(['nama_jur' => 'Sistem Informasi']);
        Jurusan::create(['nama_jur' => 'Teknik Komputer']);
        Jurusan::create(['nama_jur' => 'Manajemen']);
        Jurusan::create(['nama_jur' => 'Teknik Sipil']);
        Jurusan::create(['nama_jur' => 'Teknik Elektro']);
        Jurusan::create(['nama_jur' => 'Teknik Lingkungan']);
        Jurusan::create(['nama_jur' => 'Pendidikan Kedokteran']);
    }
}
