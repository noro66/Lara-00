<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        //admin
            [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'role' => 'admin',
             'status' => 'online'
            ],
            //agent
            [
                'name' => 'Agent',
                'email' => 'Agent@gmail.com',
                'password' => Hash::make('agent@gmail.com'),
                'role' => 'agent',
                'status' => 'online'
            ],
            //user
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user@gmail.com'),
                'role' => 'user',
                'status' => 'online'
            ]
        ]);
    }
}
