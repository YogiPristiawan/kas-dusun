<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'yogi',
            'role' => 'developer',
            'email' => 'yogi@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        DB::table('users')->insert([
            'name' => 'dewi',
            'role' => 'admin',
            'email' => 'dewi@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
