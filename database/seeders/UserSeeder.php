<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Iqbal FR',
                'username' => '2011521017',
                'email' => 'iqbaall@email.com',
                'password' => bcrypt('qqq')
            ], [
                'name' => 'Rayhan Rizaldi',
                'username' => '2011522021',
                'email' => 'rayhannn@email.com',
                'password' => bcrypt('qqq')
            ], [
                'name' => 'Dwisuci Insani Karimah',
                'username' => '2011522011',
                'email' => 'suciii@email.com',
                'password' => bcrypt('qqq')
            ], [
                'name' => 'Muhammad Zaim Milzam',
                'username' => '2011522020',
                'email' => 'zet_em@email.com',
                'password' => bcrypt('qqq')
            ], [
                'name' => 'Zeki Chen',
                'username' => '2011341188',
                'email' => 'jekigaul@email.com',
                'password' => bcrypt('qqq')
            ], [
                'name' => 'Husnil Kamil',
                'username' => '198201182008121002',
                'email' => 'husnil@it.unand.ac.id',
                'password' => bcrypt('qqq')
            ], [
                'name' => 'Rahmatika PS',
                'username' => '199308152022032017',
                'email' => 'rahmatikaps@it.unand.ac.id',
                'password' => bcrypt('qqq')
            ], [
                'name' => 'Fajril Akbar',
                'username' => '198001102008121002',
                'email' => 'ijab@it.unand.ac.id',
                'password' => bcrypt('qqq')
            ]
        ]);
    }
}
