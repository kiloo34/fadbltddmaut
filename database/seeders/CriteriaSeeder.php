<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Criteria::truncate();
        Criteria::insert([
            [
                'name' => 'pendidikan',
                'value' => 1,
                'as' => 'pendidikan',
                'code' => 'A1'
            ],
            [
                'name' => 'jumlah_tanggungan',
                'value' => 4,
                'as' => 'jumlah tanggungan',
                'code' => 'A2'
            ],
            [
                'name' => 'pekerjaan',
                'value' => 2,
                'as' => 'pekerjaan',
                'code' => 'A3'
            ],
            [
                'name' => 'umur',
                'value' => 5,
                'as' => 'umur',
                'code' => 'A4'
            ],
            [
                'name' => 'penghasilan',
                'value' => 3,
                'as' => 'penghasilan',
                'code' => 'A5'
            ],
            [
                'name' => 'riwayat_penyakit',
                'value' => 6,
                'as' => 'sakit kronis / menahun / difabel',
                'code' => 'A6'
            ],
        ]);
    }
}