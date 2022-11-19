<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Глеб',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'secret-santa' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Вася',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'secret-santa' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Петя',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'secret-santa' => 1,
        ]);
    }
}
