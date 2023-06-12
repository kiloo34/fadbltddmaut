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
            [
                'name' => 'SUAMI',
                'age' => 65,
                'dependent' => 0,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 1,
                'condition' => 1,
            ],
            [
                'name' => 'HANI',
                'age' => 35,
                'dependent' => 2,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 3,
                'condition' => 0,
            ],
            [
                'name' => "MADRA'I",
                'age' => 70,
                'dependent' => 1,
                'job_id' => 7,
                'earnings' => 40000,
                'education_id' => 3,
                'condition' => 2,
            ],
            [
                'name' => "SOENARTI",
                'age' => 66,
                'dependent' => 0,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1,
            ],
            [
                'name' => "KUSMININGSIH",
                'age' => 66,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 3,
                'condition' => 2,
            ],
            [
                'name' => "SUARNI",
                'age' => 72,
                'dependent' => 2,
                'job_id' => 3,
                'earnings' => 40000,
                'education_id' => 1,
                'condition' => 1,
            ],
            [
                'name' => "MAI",
                'age' => 81,
                'dependent' => 1,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 1,
                'condition' => 2
            ],
            [
                'name' => "MISNATI",
                'age' => 54,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 40000,
                'education_id' => 2,
                'condition' => 0
            ],
            [
                'name' => "MISNATUN",
                'age' => 53,
                'dependent' => 2,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 1,
                'condition' => 0
            ],
            [
                'name' => "ANTUNG MARTA SETIOWATI",
                'age' => 51,
                'dependent' => 6,
                'job_id' => 2,
                'earnings' => 40000,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "SRI AYUNI",
                'age' => 46,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 35000,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "RAMLI",
                'age' => 54,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 50000,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "HOLIT MAWARDI",
                'age' => 59,
                'dependent' => 0,
                'job_id' => 2,
                'earnings' => 40000,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "ASIM",
                'age' => 51,
                'dependent' => 2,
                'job_id' => 3,
                'earnings' => 55000,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "ZAENOLLAH",
                'age' => 50,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 50000,
                'education_id' => 2,
                'condition' => 0
            ],
            [
                'name' => "TITIK MUSTIKA WATI",
                'age' => 47,
                'dependent' => 3,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "MISNARI",
                'age' => 68,
                'dependent' => 3,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 2
            ],
            [
                'name' => "MUHAMMAD SLAMET",
                'age' => 48,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 75000,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "MOHAMMAD TOHA",
                'age' => 48,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 60000,
                'education_id' => 5,
                'condition' => 0
            ],
            [
                'name' => "ZAENAB",
                'age' => 71,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 40000,
                'education_id' => 3,
                'condition' => 1
            ],
            [
                'name' => "MUNAWAROH",
                'age' => 43,
                'dependent' => 3,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "TONA",
                'age' => 71,
                'dependent' => 1,
                'job_id' => 2,
                'earnings' => 30000,
                'education_id' => 1,
                'condition' => 2
            ],
            [
                'name' => "NAPPA",
                'age' => 71,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "SAMSIA",
                'age' => 63,
                'dependent' => 1,
                'job_id' => 3,
                'earnings' => 30000,
                'education_id' => 2,
                'condition' => 2
            ],
            [
                'name' => "NANING SUJINA",
                'age' => 50,
                'dependent' => 3,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 3,
                'condition' => 1
            ],
            [
                'name' => "SUHAIRIYAH",
                'age' => 54,
                'dependent' => 2,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "SRIMONA",
                'age' => 93,
                'dependent' => 0,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 1,
                'condition' => 1
            ],
            [
                'name' => "SUMIYATI",
                'age' => 33,
                'dependent' => 3,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 4,
                'condition' => 1
            ],
            [
                'name' => "MAsdIYO",
                'age' => 52,
                'dependent' => 3,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "ABDUL KADIR",
                'age' => 33,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 60000,
                'education_id' => 4,
                'condition' => 1
            ],
            [
                'name' => "RAMMA",
                'age' => 92,
                'dependent' => 3,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "KARMILA MAIDIYAMA",
                'age' => 22,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "SUYANTO",
                'age' => 66,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 50000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "MOHAMMAD SANTOSO",
                'age' => 41,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 70000,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "SU",
                'age' => 77,
                'dependent' => 1,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 1,
                'condition' => 2
            ],
            [
                'name' => "MAIMUNA",
                'age' => 52,
                'dependent' => 2,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "AMI",
                'age' => 73,
                'dependent' => 0,
                'job_id' => 4,
                'earnings' => 65000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "HOTIMA",
                'age' => 54,
                'dependent' => 0,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 0
            ],
            [
                'name' => "SANIMA",
                'age' => 77,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "TIJA",
                'age' => 81,
                'dependent' => 0,
                'job_id' => 3,
                'earnings' => 50000,
                'education_id' => 1,
                'condition' => 1
            ],
            [
                'name' => "SUYA",
                'age' => 78,
                'dependent' => 1,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "SUTIKNO",
                'age' => 32,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 0
            ],
            [
                'name' => "SALMA",
                'age' => 68,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "SUMINI",
                'age' => 81,
                'dependent' => 0,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "KAMILA",
                'age' => 44,
                'dependent' => 2,
                'job_id' => 7,
                'earnings' => 60000,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "NURAINI",
                'age' => 67,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "KARINI",
                'age' => 58,
                'dependent' => 3,
                'job_id' => 4,
                'earnings' => 50000,
                'education_id' => 3,
                'condition' => 1
            ],
            [
                'name' => "SARTUNA",
                'age' => 74,
                'dependent' => 1,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 1,
                'condition' => 2
            ],
            [
                'name' => "PAKMA",
                'age' => 63,
                'dependent' => 0,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 1,
                'condition' => 1
            ],
            [
                'name' => "SAPIYA",
                'age' => 64,
                'dependent' => 0,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "SANITI",
                'age' => 74,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 50000,
                'education_id' => 3,
                'condition' => 1
            ],
            [
                'name' => "TIMA",
                'age' => 78,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 1,
                'condition' => 1
            ],
            [
                'name' => "SITI HOFIFAH",
                'age' => 27,
                'dependent' => 3,
                'job_id' => 3,
                'earnings' => 60000,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "SAMA",
                'age' => 73,
                'dependent' => 0,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 1,
                'condition' => 1
            ],
            [
                'name' => "SAHRIYA",
                'age' => 45,
                'dependent' => 1,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "NISA",
                'age' => 66,
                'dependent' => 3,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 2
            ],
            [
                'name' => "MARY ATHA HEBRIANTO",
                'age' => 63,
                'dependent' => 0,
                'job_id' => 8,
                'earnings' => 80000,
                'education_id' => 6,
                'condition' => 0
            ],
            [
                'name' => "KUSTINI",
                'age' => 60,
                'dependent' => 2,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 2
            ],
            [
                'name' => "HARSINI",
                'age' => 73,
                'dependent' => 0,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 1,
                'condition' => 1
            ],
            [
                'name' => "DOBBY ISKANDAR",
                'age' => 61,
                'dependent' => 0,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 4,
                'condition' => 1
            ],
            [
                'name' => "YAYAK SRIATI PANDAN WUNGU",
                'age' => 62,
                'dependent' => 5,
                'job_id' => 9,
                'earnings' => 60000,
                'education_id' => 4,
                'condition' => 2
            ],
            [
                'name' => "SUARNAM",
                'age' => 59,
                'dependent' => 2,
                'job_id' => 4,
                'earnings' => 50000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "MUSLIKAH",
                'age' => 123,
                'dependent' => 3,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 3,
                'condition' => 1
            ],
            [
                'name' => "SIMAN",
                'age' => 51,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 70000,
                'education_id' => 2,
                'condition' => 2
            ],
            [
                'name' => "AGUS WINARTO",
                'age' => 62,
                'dependent' => 4,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "MOHAMMAD FANDHI",
                'age' => 50,
                'dependent' => 1,
                'job_id' => 2,
                'earnings' => 55000,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "SUMARTONO",
                'age' => 42,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 60000,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "FARIDATIEN HOESIN",
                'age' => 51,
                'dependent' => 2,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "LALA MURDINATA",
                'age' => 37,
                'dependent' => 1,
                'job_id' => 2,
                'earnings' => 40000,
                'education_id' => 3,
                'condition' => 0
            ],
            [
                'name' => "SAMSUL ARIFIN",
                'age' => 47,
                'dependent' => 4,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "AAN BUDIYANTO",
                'age' => 35,
                'dependent' => 4,
                'job_id' => 9,
                'earnings' => 50000,
                'education_id' => 2,
                'condition' => 1
            ],
            [
                'name' => "SHOLEH ROKHMANA",
                'age' => 53,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 50000,
                'education_id' => 2,
                'condition' => 0
            ],
            [
                'name' => "RADIMAN",
                'age' => 24,
                'dependent' => 1,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 2
            ],
            [
                'name' => "LENA MAGDA LENA",
                'age' => 60,
                'dependent' => 4,
                'job_id' => 2,
                'earnings' => 40000,
                'education_id' => 4,
                'condition' => 0
            ],
            [
                'name' => "SI'A",
                'age' => 25,
                'dependent' => 1,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 2
            ],
            [
                'name' => "JUNAIDI",
                'age' => 34,
                'dependent' => 3,
                'job_id' => 2,
                'earnings' => 50000,
                'education_id' => 2,
                'condition' => 0
            ],
            [
                'name' => "AGUSTINI",
                'age' => 54,
                'dependent' => 2,
                'job_id' => 4,
                'earnings' => 60000,
                'education_id' => 2,
                'condition' => 0
            ],
            [
                'name' => "RUSMIATI",
                'age' => 65,
                'dependent' => 2,
                'job_id' => 2,
                'earnings' => 60000,
                'education_id' => 3,
                'condition' => 2
            ],
            [
                'name' => "BAKRI",
                'age' => 77,
                'dependent' => 1,
                'job_id' => 1,
                'earnings' => 0,
                'education_id' => 1,
                'condition' => 2
            ],
            [
                'name' => "RUK",
                'age' => 52,
                'dependent' => 5,
                'job_id' => 4,
                'earnings' => 40000,
                'education_id' => 2,
                'condition' => 2
            ],
        ]);
    }
}
// JUNAIDI 	30	0	wiraswasta	80000	slta	0
// ROSITA DEWI	34	2	wiraswasta	50000	sd	0
// HARIS KURNIAWAN	30	1	-	0	sltp	0
// MARTONO	53	0	petani	70000	sd	0
// TOPEK	57	5	wiraswasta	50000	sd	0

// FIRMAN BETA ALIVYANTO	24	2	karyawan swasta	40000	sarjana	0
// RUKYATI	54	1	petani	60000	sd	2
// SITTI KOMARIYA                                              	34	4	wiraswasta	80000	slta	0
// SAMSUL	66	2	petani	60000	sd	0
// YUNUS	46	1	wiraswasta	65000	sd	0

// SUMANNAN EFFENDI	58	2	petani	60000	sd	1
// SUYA	32	0	petani	60000	sd	1
// SUTIJA	24	0	petani	60000	-	1
// DINI	59	2	wiraswasta	50000	sd	0
// NINDA SARI WULAN DWI SEPTIANA PUTRI	59	3	-	0	sd	0

// ARBAIYA	73	1	-	0	-	2
// SUWARTI	65	5	wiraswasta	40000	sd	1
// SULAMA	78	1	buruh	60000	sd	1
// SUBAENAH	42	1	wiraswasta	30000	sd	0
// SAYATI	41	0	buruh	60000	sd	0