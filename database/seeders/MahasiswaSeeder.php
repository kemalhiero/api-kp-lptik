<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nim' => '2011521017',
            'nama_mahasiswa' => 'Iqbal FR',
            'jenis_kelamin' => 'Laki',
            'alamat' => 'Lubuk Alung',
            'email' => 'iqbaall@email.com',
            'status_mhs' => 'aktif',
        ]);
        
        Mahasiswa::create([
            'id_jur' => 4,
            'id_fak' => 3,
            'nim' => '2011341188',
            'nama_mahasiswa' => 'Jom tanya',
            'jenis_kelamin' => 'Laki',
            'alamat' => 'Padang',
            'email' => 'jommm@email.com',
            'status_mhs' => 'aktif',
        ]);
        
        Mahasiswa::create([
            'id_jur' => 7,
            'id_fak' => 2,
            'nim' => '2011678889',
            'nama_mahasiswa' => 'ojo mabuk dunyo',
            'jenis_kelamin' => 'Women☕',
            'alamat' => 'Solok',
            'email' => 'jojo@email.com',
            'status_mhs' => 'aktif',
        ]);
        
        Mahasiswa::create([
            'id_jur' => 2,
            'id_fak' => 1,
            'nim' => '2011125563',
            'nama_mahasiswa' => 'uripmu rekoso',
            'jenis_kelamin' => 'Women☕',
            'alamat' => 'Solok',
            'email' => 'reko@email.com',
            'status_mhs' => 'aktif',
        ]);
    }
}
