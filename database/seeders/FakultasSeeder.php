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
        Fakultas::create(['nama_fak' => 'Teknologi Informasi']);
        Fakultas::create(['nama_fak' => 'Kedokteran']);
        Fakultas::create(['nama_fak' => 'Teknik']);
        Fakultas::create(['nama_fak' => 'Ekonomi']);
    }
}
