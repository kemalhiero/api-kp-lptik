<?php

namespace Database\Seeders;

use App\Models\Khs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Khs::insert([
            [
                'id_mk' => 1,
                'id_smt' => 5,
                'nilai_angka' => 75,
                'nilai_huruf' => 'A-'
            ],
            [
                'id_mk' => 1,
                'id_smt' => 6,
                'nilai_angka' => 75,
                'nilai_huruf' => 'A'
            ],
            [
                'id_mk' => 1,
                'id_smt' => 7,
                'nilai_angka' => 75,
                'nilai_huruf' => 'A-'
            ],
            [
                'id_mk' => 1,
                'id_smt' => 8,
                'nilai_angka' => 75,
                'nilai_huruf' => 'A-'
            ],
        ]);
    }
}
