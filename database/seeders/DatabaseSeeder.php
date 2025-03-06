<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
                $this->call(RoleSeeder::class);
                $this->call(UscPresidentSeeder::class);
                $this->call(CscDirectorySeeder::class);
                $this->call(CscOfficialSeeder::class);
                $this->call(UscOfficialSeeder::class);
                $this->call(UscAdviserSeeder::class);
                $this->call(DeveloperSeeder::class);
                $this->call(FaqSeeder::class);
                $this->call(UserSeeder::class);
                $this->call(JudicialSeeder::class);
                $this->call(EvaluationSeeder::class);
        }
}
