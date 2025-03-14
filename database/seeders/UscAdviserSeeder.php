<?php

namespace Database\Seeders;

use App\Models\UscAdviser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UscAdviserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usc_advisers = [
            [
                'name' => 'ENGR. HANA MYKA GATON-DULAY',
                'position' => 'Faculty, College of Engineering',
                'type' => 'Senior Adviser',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/engr_hana.png',
            ],
            [
                'name' => 'DR. OFELIA SAMAR-SY',
                'position' => 'Dean, College of Medicine',
                'type' => 'Junior Adviser',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/dr_ofelia.png',
            ],
            [
                'name' => 'PROF. JAZZLYN IMPERIAL',
                'position' => 'Faculty, College of Science',
                'type' => 'Junior Adviser',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/profjaz.png',
            ]
        ];

        foreach ($usc_advisers as $usc_adviser) {
            UscAdviser::create($usc_adviser);
        }
    }
}
