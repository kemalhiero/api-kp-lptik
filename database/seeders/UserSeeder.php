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
                'username' => '2011521017',
                'role' => 'm',
                'password' => bcrypt('qqq')
            ], [
                'username' => '2011522021',
                'role' => 'm',
                'password' => bcrypt('qqq')
            ], [
                'username' => '2011522011',
                'role' => 'm',
                'password' => bcrypt('qqq')
            ], [
                'username' => '2011522020',
                'role' => 'm',
                'password' => bcrypt('qqq')
            ], [
                'username' => '2011341188',
                'role' => 'm',
                'password' => bcrypt('qqq')
            ], [
                'username' => '198201182008121002',
                'role' => 'd',
                'password' => bcrypt('qqq')
            ], [
                'username' => '199308152022032017',
                'role' => 'd',
                'password' => bcrypt('qqq')
            ], [
                'username' => '199108122019032018',
                'role' => 'd',
                'password' => bcrypt('qqq')
            ], [
                'username' => '198001102008121002',
                'role' => 'd',
                'password' => bcrypt('qqq')
            ], [
                'username' => '196812261992031002',
                'role' => 'd',
                'password' => bcrypt('qqq')
            ]
        ]);
    }
}
