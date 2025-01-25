<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developers  = [
            [
                'name' => 'HAZEL ANNE B. MARQUESES',
                'position' => 'Project Manager',
                'college' => 'BS Information Technology, BUCS',
                'image_url' => '/storage/images/developers/marqueses.png',
            ],
            [
                'name' => 'TRINA CHARIZ B. HIBO',
                'position' => 'Systems Analyst',
                'college' => 'BS Information Technology, BUCS',
                'image_url' => '/storage/images/developers/hibo.png',
            ],
            [
                'name' => 'MISTY SHAINE S. NIONES',
                'position' => 'UI/UX Designer',
                'college' => 'BS Information Technology, BUCS',
                'image_url' => '/storage/images/developers/niones.png',
            ],
            [
                'name' => 'JEDDY C. CERTIFICO',
                'position' => 'Full-Stack Developer',
                'college' => 'BS Information Technology, BUCS',
                'image_url' => '/storage/images/developers/certifico.jpg',
            ],
            [
                'name' => 'ALVIN S. NARIO',
                'position' => 'Backend Developer',
                'college' => 'BS Information Technology, BUCS',
                'image_url' => '/storage/images/developers/nario.PNG',
            ],
            [
                'name' => 'ELJOHN PAULO C. LOTERTE',
                'position' => 'UI/UX Designer',
                'college' => 'BS Information Technology, BUCS',
                'image_url' => '/storage/images/developers/loterte.png',
            ],
        ];

        foreach ($developers as $developer) {
            Developer::create($developer);
        }
    }
}
