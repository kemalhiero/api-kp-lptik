<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fakultas::insert([
            ['uuid' => 'yG4nDwLzvI2c8QoFhE9XmS5x1pNbUfKa0jR',
                'nama' => 'Teknologi Informasi'],
            ['uuid' => 'Hm5uV7vZ8qB3xXb9J2fD6jRnL1WzYpKcA4G',
                'nama' => 'Kedokteran'],
            ['uuid' => 'iK1OuE7VvRz8WlQcP2aBjxG4fYgZtMhN0Fm',
                'nama' => 'Teknik'],
            ['uuid' => 'G6eS4pW1dK9XxJ0jYnZvL8zTfVtOoIuHrA2q',
                'nama' => 'Ekonomi']
        ]);
      
    }
}
