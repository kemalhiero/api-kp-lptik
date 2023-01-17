<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Krs;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Krs::create([
            'id_mhs' => 1,
            'semester' => "4",
        ]);
        Krs::create([
            'id_mhs' => 2,
            'semester' => "4",
        ]);
        Krs::create([
            'id_mhs' => 3,
            'semester' => "6",
        ]);
        Krs::create([
            'id_mhs' => 4,
            'semester' => "6",
        ]);
    }
}
