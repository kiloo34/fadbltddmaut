<?php

namespace Database\Seeders;

use App\Models\VillagerCriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillagerCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        VillagerCriteria::truncate();
        VillagerCriteria::insert([
            [
                'villager_id' => 1,
                'criteria_id' => 1,
                'value' => 0,
                'conversion' => 3,
            ],
            [
                'villager_id' => 1,
                'criteria_id' => 2,
                'value' => 0,
                'conversion' => 3,
            ],
            [
                'villager_id' => 1,
                'criteria_id' => 3,
                'value' => 0,
                'conversion' => 3,
            ],
            [
                'villager_id' => 1,
                'criteria_id' => 4,
                'value' => 0,
                'conversion' => 3,
            ],
            [
                'villager_id' => 1,
                'criteria_id' => 5,
                'value' => 0,
                'conversion' => 3,
            ],
            [
                'villager_id' => 1,
                'criteria_id' => 6,
                'value' => 0,
                'conversion' => 3,
            ],
        ]);
    }
}
