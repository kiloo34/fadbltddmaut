<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
	User::truncate();
	User::insert([
            [
                'username' => 'admin',
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('adminadmin'),
                'role_id' => 1
            ]
        ]);
    }
}
