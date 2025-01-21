<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UscAdviserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now(); // Get the current timestamp
        
        $advisers = [
            [
                'name' => 'DR. OFELIA SAMAR-SY',
                'position' => 'Junior Adviser',
                'email' => 'buexample1@gmail.com', // Add email if available
                'directory_id' => 2,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'ENGR. HANA MYKA GATON-DULAY',
                'position' => 'Senior Adviser',
                'email' => 'buexample2@gmail.com', // Add email if available
                'directory_id' => 2,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'JAZZLYN IMPERIAL',
                'position' => 'Junior Adviser',
                'email' => 'buexample3@gmail.com', // Add email if available
                'directory_id' => 2,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now, 'updated_at' => $now
            ],
        ];

        foreach ($advisers as $adviser) {
            \DB::table('officials')->insert($adviser);
        }
    }
}
