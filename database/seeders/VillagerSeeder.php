<?php

namespace Database\Seeders;

use App\Models\Villager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Villager::truncate();
        Villager::insert([
            [
                'name' => 'doni sutrisno',
                'age' => 40,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 50000,
                'education_id' => 2,
                'condition' => 0,
            ],
            [
                'name' => 'mariati',
                'age' => 67,
                'dependent' => 0,
                'job_id' => 3,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 1,
            ],
            [
                'name' => 'turyati andriyono',
                'age' => 46,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 0,
            ],
            [
                'name' => 'siti aminah',
                'age' => 27,
                'dependent' => 4,
                'job_id' => 3,
                'earnings' => 60000,
                'education_id' => 3,
                'condition' => 0,
            ],
            [
                'name' => 'zainur r',
                'age' => 42,
                'dependent' => 4,
                'job_id' => 2,
                'earnings' => 80000,
                'education_id' => 2,
                'condition' => 0,
            ],
            [
                'name' => 'suryati',
                'age' => 35,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 3,
                'condition' => 1,
            ],
            [
                'name' => 'suan',
                'age' => 38,
                'dependent' => 1,
                'job_id' => 2,
                'earnings' => 70000,
                'education_id' => 3,
                'condition' => 0,
            ],
            [
                'name' => 'hari rahmanto',
                'age' => 35,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 40000,
                'education_id' => 2,
                'condition' => 0,
            ],
            [
                'name' => 'to amsin',
                'age' => 81,
                'dependent' => 1,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 1,
            ],
            [
                'name' => 'misnati',
                'age' => 42,
                'dependent' => 2,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 3,
                'condition' => 0,
            ],
            [
                'name' => 'junaedi',
                'age' => 44,
                'dependent' => 0,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 3,
                'condition' => 2,
            ],
            [
                'name' => 'kartini',
                'age' => 78,
                'dependent' => 0,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1,
            ],
            [
                'name' => 'sudarni',
                'age' => 67,
                'dependent' => 1,
                'job_id' => 2,
                'earnings' => 40000,
                'education_id' => 3,
                'condition' => 2,
            ],
            [
                'name' => 'assari',
                'age' => 69,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 30000,
                'education_id' => 2,
                'condition' => 2,
            ],
            [
                'name' => 'yuliati',
                'age' => 35,
                'dependent' => 2,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 3,
                'condition' => 0,
            ],
        ]);
    }
}
