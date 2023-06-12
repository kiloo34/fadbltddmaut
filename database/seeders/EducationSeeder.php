<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Education::truncate();
        Education::insert([
            [
                'name' => 'tidak_sekolah',
                'as' => 'tidak sekolah',
                'type' => 5
            ],
            [
                'name' => 'sd',
                'as' => 'SD',
                'type' => 4
            ],
            [
                'name' => 'smp',
                'as' => 'SMP / SLTP / Sederajat',
                'type' => 3
            ],
            [
                'name' => 'sma',
                'as' => 'SMA / SLTA / Sederajat',
                'type' => 2
            ],
            [
                'name' => 'diploma',
                'as' => 'diploma',
                'type' => 1
            ],
            [
                'name' => 'sarjana',
                'as' => 'sarjana',
                'type' => 1
            ],
        ]);
    }
}
