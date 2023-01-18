<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Krs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Krs;
>>>>>>> master

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Krs::insert([
            [
                'id_mhs' => 13,
                'semester' => 4,
            ],
            [
                'id_mhs' => 14,
                'semester' => 5
            ],
           
=======
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
>>>>>>> master
        ]);
    }
}
