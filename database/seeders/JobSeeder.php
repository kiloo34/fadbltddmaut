<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Job::truncate();
        Job::insert([
            [
                'name' => 'tidak_bekerja',
                'as' => 'tidak bekerja',
                'type' => 5
            ],
            [
                'name' => 'wiraswasta',
                'as' => 'wiraswasta',
                'type' => 3
            ],
            [
                'name' => 'buruh',
                'as' => 'buruh',
                'type' => 3
            ],
            [
                'name' => 'petani',
                'as' => 'petani',
                'type' => 3
            ],
            [
                'name' => 'honorer',
                'as' => 'honorer',
                'type' => 3
            ],
            [
                'name' => 'wirausaha',
                'as' => 'wirausaha',
                'type' => 3
            ],
            [
                'name' => 'karyawan swasta',
                'as' => 'karyawan_swasta',
                'type' => 3
            ],
            [
                'name' => 'guru',
                'as' => 'guru',
                'type' => 1
            ],
            [
                'name' => 'pensiunan',
                'as' => 'pensiunan',
                'type' => 1
            ],

            // Buruh, petani, wiraswasta dan karyawan swasta 
        ]);
    }
}


