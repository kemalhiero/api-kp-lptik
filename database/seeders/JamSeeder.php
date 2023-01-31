<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jam')->insert([
            [ 'jam_kuliah' => '07:30-10:00' ],
            [ 'jam_kuliah' => '07:30-09:00' ],
            [ 'jam_kuliah' => '10:00-13:00' ],
            [ 'jam_kuliah' => '13:30-16:00' ],
            [ 'jam_kuliah' => '16:00-17:40'],
        ]);
    }
}
