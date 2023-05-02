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
                'as' => 'tidak bekerja'
            ],
            [
                'name' => 'wiraswasta',
                'as' => 'wiraswasta'
            ],
            [
                'name' => 'buruh',
                'as' => 'buruh'
            ],
            [
                'name' => 'petani',
                'as' => 'petani'
            ],
            [
                'name' => 'wirausaha',
                'as' => 'wirausaha'
            ]
        ]);
    }
}
