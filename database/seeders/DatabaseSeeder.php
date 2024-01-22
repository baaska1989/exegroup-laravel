<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => "Baasandorj",
            'last_name' => "Lhagvasuren",
            'email' => 'baaska1989@gmail.com',
            'role' => "1",
            'password' => Hash::make('password'),
            'isBlock' => 0
        ]);
    }
}
