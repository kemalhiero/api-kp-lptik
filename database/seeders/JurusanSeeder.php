<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::insert([
            ['nama_jur' => 'Sistem Informasi'],
            ['nama_jur' => 'Teknik Komputer'],
            ['nama_jur' => 'Manajemen'],
            ['nama_jur' => 'Teknik Sipil'],
            ['nama_jur' => 'Teknik Elektro'],
            ['nama_jur' => 'Teknik Lingkungan'],
            ['nama_jur' => 'Pendidikan Dokter']
        ]);
    }

}
