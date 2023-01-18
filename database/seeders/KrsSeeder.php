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
                'id_mhs' => 13,
                'semester' => 4,
            ],
            [
                'id_mhs' => 14,
                'semester' => 5
            ],
           
        ]);
    }
}
