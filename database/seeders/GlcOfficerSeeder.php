<?php

namespace Database\Seeders;

use App\Models\GlcOfficer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GlcOfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $glc_officers = [
            ['name' => 'JAMILLE R. BUIZA', 'position' => 'Chief Legislative Officer'],
            ['name' => 'KENJHIE R. ALFONSO', 'position' => 'Majority Floor Leader'],
            ['name' => 'MA. BERNADETTE R. PANALIGAN', 'position' => 'Pro Tempore'],
            ['name' => 'CEDRICK B. DELOS SANTOS', 'position' => 'Minority Floor Leader'],
            ['name' => 'JENELLE V. PALMA', 'position' => 'Sergeant-at-Arms'],
            ['name' => 'JAY MAR A. BARCENAS', 'position' => 'Sergeant-at-Arms'],
            ['name' => 'SARAH A. BALGEMINO', 'position' => 'Sergeant-at-Arms'],
            ['name' => 'RANCIA LEI B. BULAWAN', 'position' => 'Chairperson<br>Secretariat Committee'],
            ['name' => 'YANCY S. BERMAS', 'position' => 'Chairperson<br>Finance Committee'],
            ['name' => 'KYLE REUBEN O. BRON', 'position' => 'Chairperson<br>Public Relations'],
            ['name' => 'IZEL B. MANATA', 'position' => 'Chairperson<br>Ways and Means Committee'],
            ['name' => 'JAMILLE R. BUIZA', 'position' => 'Chairperson<br>University Student Center'],
            ['name' => 'KC MAXINNE A. MENDONES', 'position' => 'Chairperson<br>External Relations'],
            ['name' => 'FRANCIS FERHOL A. BORRAS', 'position' => 'Chairperson<br>Socio-Cultural Committee'],
            ['name' => 'DAVE RUSSEL C. ADVINCULA', 'position' => 'Chairperson<br>Research, Education, and Publication'],
            ['name' => 'MARCK LESTER B. ESTO', 'position' => 'Chairperson<br>Student Rights and Welfare'],
            ['name' => 'IHRA MAE C. MADRIDEO', 'position' => 'Chairperson<br>Academic Affairs'],
        ];

        foreach ($glc_officers as $glc_officer) {
            GlcOfficer::create($glc_officer);
        }
    }
}
