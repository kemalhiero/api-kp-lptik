<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::insert([
            [ 'id_mhs' => 1, 'semester' => 1, 'jumlah_sks' => '18', 'ips' => '3.4',],
            [ 'id_mhs' => 1, 'semester' => 2, 'jumlah_sks' => '20', 'ips' => '4.0',],
            [ 'id_mhs' => 1, 'semester' => 3, 'jumlah_sks' => '24', 'ips' => '3.6',],
            [ 'id_mhs' => 1, 'semester' => 4, 'jumlah_sks' => '24', 'ips' => '3.5',],
            
            [ 'id_mhs' => 2, 'semester' => 1, 'jumlah_sks' => '18', 'ips' => '3.3',],
            [ 'id_mhs' => 2, 'semester' => 2, 'jumlah_sks' => '20', 'ips' => '4.0',],
            [ 'id_mhs' => 2, 'semester' => 3, 'jumlah_sks' => '24', 'ips' => '3.5',],
            [ 'id_mhs' => 2, 'semester' => 4, 'jumlah_sks' => '24', 'ips' => '3.4',],
            
            [ 'id_mhs' => 3, 'semester' => 1, 'jumlah_sks' => '18', 'ips' => '3.2',],
            [ 'id_mhs' => 3, 'semester' => 2, 'jumlah_sks' => '20', 'ips' => '3.0',],
            [ 'id_mhs' => 3, 'semester' => 3, 'jumlah_sks' => '24', 'ips' => '3.5',],
            [ 'id_mhs' => 3, 'semester' => 4, 'jumlah_sks' => '24', 'ips' => '3.6',],
            
            [ 'id_mhs' => 4, 'semester' => 1, 'jumlah_sks' => '18', 'ips' => '3.1',],
            [ 'id_mhs' => 4, 'semester' => 2, 'jumlah_sks' => '20', 'ips' => '3.3',],
            [ 'id_mhs' => 4, 'semester' => 3, 'jumlah_sks' => '24', 'ips' => '4.0',],
            [ 'id_mhs' => 4, 'semester' => 4, 'jumlah_sks' => '24', 'ips' => '3.5',],
            
        ]);
    }
}
