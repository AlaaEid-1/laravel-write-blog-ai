<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Alaa Admin',
            'email' => 'Alaa@example.com',
            'email_verified_at'=>now(),
            'password' => Hash::make('alaa'),
            'user_name' => 'Alaa Eid',
            'timezone' => 'Asia/Gaza',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now()
     ]);
             DB::table('users')->insert([
            'name' => 'Menna Admin',
            'email' => 'Menna@example.com',
            'email_verified_at'=>now(),
            'password' => Hash::make('alaa'),
            'user_name' => 'Menna Ahmed',
            'timezone' => 'Asia/Gaza',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now()
     ]);
    }
}
