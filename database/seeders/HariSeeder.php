<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hari')->insert([
            [ 'nama_hari' => 'Senin' ],
            [ 'nama_hari' => 'Selasa' ],
            [ 'nama_hari' => 'Rabu' ],
            [ 'nama_hari' => 'Kamis' ],
            [ 'nama_hari' => 'Jum\'at' ],
        ]);
    }
}
