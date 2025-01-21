<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now(); // Get the current timestamp

        $directories = [
            ['name' => 'USC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //1
            ['name' => 'USC Advisers', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //2
            ['name' => 'USC Presidents', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //3
            ['name' => 'Developers', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //4
            ['name' => 'BUCENG CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //5
            ['name' => 'BUCE CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //6
            ['name' => 'BUCAL CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //7
            ['name' => 'BUCBEM CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //8
            ['name' => 'BUCDM CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //9
            ['name' => 'BUCN CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //10 
            ['name' => 'BUCS CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //11
            ['name' => 'BUCSSP CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //12
            ['name' => 'BUIDEA CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //13
            ['name' => 'BUIPESR CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //14
            ['name' => 'BUJMRIGD CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //15
            ['name' => 'BUGC CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //16
            ['name' => 'BUCAF CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //17 
            ['name' => 'BUPC CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //18
            ['name' => 'BUTC CSC', 'year_range' => '2024-2025', 'created_at' => $now, 'updated_at' => $now], //19
        ];

        DB::table('directories')->insert($directories);
    }
}
