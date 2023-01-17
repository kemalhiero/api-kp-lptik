<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * laki-laki->l perempuan->p
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
            'jenis_kelamin' => 'l',             
            'alamat' => 'Lubuk Alung',
            'email' => 'iqbaall@email.com',
            'status_mhs' => 'aktif',
        ]);

        Mahasiswa::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nim' => '2011522021',
            'nama_mahasiswa' => 'Rayhan Rizaldi',
            'jenis_kelamin' => 'l',
            'alamat' => 'Bukittinggi',
            'email' => 'rayhannn@email.com',
            'status_mhs' => 'aktif',
        ]);
        
        Mahasiswa::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nim' => '2011522000',
            'nama_mahasiswa' => 'Dwisuci Insani Karimah',
            'jenis_kelamin' => 'p',
            'alamat' => 'Padang',
            'email' => 'suciii@email.com',
            'status_mhs' => 'aktif',
        ]);

        Mahasiswa::create([
            'id_jur' => 1,
            'id_fak' => 1,
            'nim' => '2011522020',
            'nama_mahasiswa' => 'Muhammad Zaim Milzam',
            'jenis_kelamin' => 'p',
            'alamat' => 'Padang',
            'email' => 'suciii@email.com',
            'status_mhs' => 'aktif',
        ]);
        
        Mahasiswa::create([
            'id_jur' => 4,
            'id_fak' => 3,
            'nim' => '2011341188',
            'nama_mahasiswa' => 'Ahmad',
            'jenis_kelamin' => 'l',
            'alamat' => 'Solok',
            'email' => 'ahmad@email.com',
            'status_mhs' => 'aktif',
        ]);
        
        Mahasiswa::create([
            'id_jur' => 7,
            'id_fak' => 2,
            'nim' => '2011678889',
            'nama_mahasiswa' => 'Megawati',
            'jenis_kelamin' => 'p',
            'alamat' => 'Solok',
            'email' => 'jojo@email.com',
            'status_mhs' => 'aktif',
        ]);
        
        Mahasiswa::create([
            'id_jur' => 2,
            'id_fak' => 1,
            'nim' => '2011125563',
            'nama_mahasiswa' => 'Puan',
            'jenis_kelamin' => 'p',
            'alamat' => 'Solok',
            'email' => 'reko@email.com',
            'status_mhs' => 'aktif',
        ]);
    }
}
