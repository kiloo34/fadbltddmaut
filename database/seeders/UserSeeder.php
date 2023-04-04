<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('users')->truncate();
        \DB::table('users')->insert([
            [
                'username' => 'admin23',
                'name' => 'admin',
                'email' => 'admin@email.com',
                'password' => bcrypt('12345678'),
                'role_id' => 1
            ]
        ]);
    }
}
