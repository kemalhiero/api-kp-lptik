<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DosenSeeder extends Seeder
{
    /**

     * Run the database seeds.

     * keterangan
     * laki-laki->l, perempuan->p
     * iya->y, tidak->t

     *
     * @return void
     */
    public function run()
    {

        DB::table('dosen')->insert([
            [
                'id_jur' => 1,
                'id_fak' => 1,
                'nip' => '198201182008121002',
                'nama_dosen' => 'Husnil Kamil',
                'jenis_kelamin' => 'l',
                'alamat' => 'Padang',
                'email' => 'husnilkamil@gmail.com',
                'status_pa' => true
            ],
             [
                'id_jur' => 1,
                'id_fak' => 1,
                'nip' => '199308152022032017',
                'nama_dosen' => 'Rahmatika PS',
                'jenis_kelamin' => 'p',
                'alamat' => 'Padang',
                'email' => 'rahmatikaps@it.unand.ac.id',
                'status_pa' => false,
             ],
             [
                'id_jur' => 1,
                'id_fak' => 1,
                'nip' => '199108122019032018 ',
                'nama_dosen' => 'Dwi Welly Sukma Nirad',
                'jenis_kelamin' => 'p',
                'alamat' => 'Padang',
                'email' => 'welly@it.unand.ac.id',
                'status_pa' => false,
             ],
             [
                 'id_jur' => 1,
                 'id_fak' => 1,
                 'nip' => '198001102008121002',
                 'nama_dosen' => 'Fajril Akbar',
                 'jenis_kelamin' => 'l',
                 'alamat' => 'Padang',
                 'email' => 'ijab@it.unand.ac.id',
                 'status_pa' => true,
                ],
                [
                 'id_jur' => 4,
                 'id_fak' => 3,
                 'nip' => '196812261992031002',
                 'nama_dosen' => 'Abdul Hakam',
                 'jenis_kelamin' => 'l',
                 'alamat' => 'Pariaman',
                 'email' => 'abdulhakam@ts.unand.ac.id',
                 'status_pa' => false,
            ]
            
        ]);
     
    }
}
