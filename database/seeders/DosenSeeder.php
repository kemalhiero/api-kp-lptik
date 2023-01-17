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
                'nip' => '198201182008121002',
                'nama_dosen' => 'Husnil Kamil',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Padang',
                'email' => 'husnilkamil@gmail.com',
                'status_pa' => 'aktif'
            ]
            
        ]);
    }
}
