<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'qepo lu',
            'username' => 'qqq',
            'email' => 'qqq@email.com',
            'password' => bcrypt('qqq')
        ]);

        $this->call([
            JurusanSeeder::class,
            FakultasSeeder::class,
            MataKuliahSeeder::class,         //urutan ngisinya sesuai sama ini
            RuangSeeder::class,
            DosenSeeder::class,
            MahasiswaSeeder::class,
            BimbinganSeeder::class,
            KrsSeeder::class,
            JadwalSeeder::class,

            // KhsSeeder::class,
        ]);
    }
}
