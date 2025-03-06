<?php

namespace Database\Seeders;

use App\Models\Judicial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JudicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $judicials = [
            ['name' => 'MARCK LESTER B. ESTO', 'position' => 'Chairperson'],
        ];

        foreach ($judicials as $judicial) {
            Judicial::create($judicial);
        }
    }
}
