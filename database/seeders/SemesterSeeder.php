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
            [
                'id_mhs' => 13,
                'semester' => 1,
                'jumlah_sks' => '18',
                'ips' => '3.4',
            ],
            [
                'id_mhs' => 13,
                'semester' => 2,
                'jumlah_sks' => '20',
                'ips' => '4.0',
            ],
            [
                'id_mhs' => 13,
                'semester' => 3,
                'jumlah_sks' => '24',
                'ips' => '3.6',
            ],
            [
                'id_mhs' => 13,
                'semester' => 4,
                'jumlah_sks' => '24',
                'ips' => '3.5',
            ],
            
        ]);
    }
}
