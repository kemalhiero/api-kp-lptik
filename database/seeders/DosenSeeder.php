<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * keterangan
     * laki-laki->l, perempuan->p
     * iya->y, tidak->t
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nip' => '198201182008121002',
            'nama_dosen' => 'Husnil Kamil',
            'jenis_kelamin' => 'l',
            'alamat' => 'Padang',
            'email' => 'husnil@it.unand.ac.id',
            'status_pa' => 'y',
        ]);

        Dosen::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nip' => '199308152022032017',
            'nama_dosen' => 'Rahmatika PS',
            'jenis_kelamin' => 'p',
            'alamat' => 'Padang',
            'email' => 'rahmatikaps@it.unand.ac.id',
            'status_pa' => 't',
        ]);

        Dosen::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nip' => '198001102008121002',
            'nama_dosen' => 'Fajril Akbar',
            'jenis_kelamin' => 'l',
            'alamat' => 'Padang',
            'email' => 'ijab@it.unand.ac.id',
            'status_pa' => 'y',
        ]);

        Dosen::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nip' => '199108122019032018 ',
            'nama_dosen' => 'Dwi Welly Sukma Nirad',
            'jenis_kelamin' => 'p',
            'alamat' => 'Padang',
            'email' => 'welly@it.unand.ac.id',
            'status_pa' => 't',
        ]);
        
        Dosen::create([
            'id_jur' => 4,
            'id_fak' => 3,
            'nip' => '181152123542',
            'nama_dosen' => 'Bambang Gunadarma',
            'jenis_kelamin' => 'l',
            'alamat' => 'Pariaman',
            'email' => 'bambang@ts.unand.ac.id',
            'status_pa' => 't',
        ]);

    }
}
