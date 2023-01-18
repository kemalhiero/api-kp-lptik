<?php

namespace Database\Seeders;

use App\Models\Krs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Krs::insert([
            [
                'id_mhs' => 6,
                'semester' => "4",
            ],
            [
                'id_mhs' => 7,
                'semester' => "5"
            ],
            [
                'id_mhs' => 8,
                'semester' => "4",
            ],
            [
                'id_mhs' => 9,
                'semester' => "4",
            ],
            [
                'id_mhs' => 10,
                'semester' => "5",
            ],
        
        ]);
           
      
    }
}
