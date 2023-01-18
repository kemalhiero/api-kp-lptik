<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dosen')->insert([
            [
                'kode_jur' => 1,
                'kode_fak' => 1,
                'nip' => '198201182008121002',
                'nama_dosen' => 'Husnil Kamil',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Padang',
                'email' => 'husnilkamil@gmail.com',
                'status_pa' => 'aktif'
            ],
             [
                'kode_jur' => 1,
                'kode_fak' => 1,
                'nip' => '199308152022032017',
                'nama_dosen' => 'Rahmatika PS',
                'jenis_kelamin' => 'p',
                'alamat' => 'Padang',
                'email' => 'rahmatikaps@it.unand.ac.id',
                'status_pa' => 't',
             ],
             [
                'kode_jur' => 1,
                'kode_fak' => 1,
                'nip' => '199108122019032018 ',
                'nama_dosen' => 'Dwi Welly Sukma Nirad',
                'jenis_kelamin' => 'p',
                'alamat' => 'Padang',
                'email' => 'welly@it.unand.ac.id',
                'status_pa' => 't',
             ],
             [
                'kode_jur' => 4,
                'kode_fak' => 3,
                'nip' => '181152123542',
                'nama_dosen' => 'Bambang Gunadarma',
                'jenis_kelamin' => 'l',
                'alamat' => 'Pariaman',
                'email' => 'bambang@ts.unand.ac.id',
                'status_pa' => 't',
             ],
             [
                'kode_jur' => 1,
                'kode_fak' => 1,
                'nip' => '198001102008121002',
                'nama_dosen' => 'Fajril Akbar',
                'jenis_kelamin' => 'l',
                'alamat' => 'Padang',
                'email' => 'ijab@it.unand.ac.id',
                'status_pa' => 'y',
            ]
            
        ]);
     
    }
}
