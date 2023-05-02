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
                'as' => 'tidak sekolah'
            ],
            [
                'name' => 'sd',
                'as' => 'SD'
            ],
            [
                'name' => 'smp',
                'as' => 'SMP / SLTP / Sederajat'
            ],
            [
                'name' => 'sma',
                'as' => 'SMA / SLTA / Sederajat'
            ],
        ]);
    }
}
