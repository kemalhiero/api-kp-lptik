<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nip' => '1811521732891',
            'nama_dosen' => 'Husnil Kamil',
            'jenis_kelamin' => 'Lakik',
            'alamat' => 'Padang',
            'email' => 'husnil@it.unand.ac.id',
            'status_pa' => 'yo',
        ]);
        
        Dosen::create([
            'id_jur' => 4,
            'id_fak' => 3,
            'nip' => '181152123542',
            'nama_dosen' => 'Bambang Gunadarma',
            'jenis_kelamin' => 'Lakik',
            'alamat' => 'Pariaman',
            'email' => 'bambang@ts.unand.ac.id',
            'status_pa' => 'ndk',
        ]);
    }
}
