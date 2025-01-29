<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create a user with, email, name and password
        DB::table("users")->insert([
            "name"=> "Administator",
            "email"=> "admin@example.com",
            "email_verified_at"=> now(),
            "password"=> bcrypt("password"),
            "remember_token"=> Str::random(10),
        ]);
        
    }
}
