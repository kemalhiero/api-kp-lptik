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
                'id_mhs' => 1,
                'semester' => "4",
            ],
            [
                'id_mhs' => 2,
                'semester' => "6"
            ],
            [
                'id_mhs' => 3,
                'semester' => "4",
            ],
            [
                'id_mhs' => 4,
                'semester' => "4",
            ],
            [
                'id_mhs' => 5,
                'semester' => "6",
            ],
        
        ]);
           
      
    }
}
