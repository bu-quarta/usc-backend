<?php

namespace Database\Seeders;

use App\Models\UscOfficial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UscOfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usc_officials = [
            [
                'name' => 'STACY DANIEL V. ALAMARES',
                'position' => 'Chairperson and Student Regent',
                'college' => 'College of Arts and Letters',
                'email' => 'stacydanielvibar.alamares@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/alamares.png',
            ],
            [
                'name' => 'JAMILLE R. BUIZA',
                'position' => 'Internal Vice Chairperson',
                'college' => 'Jesse M. Robredo Institute of Governance and Development',
                'email' => 'jamillerodis.buiza@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/buiza.png',
            ],
            [
                'name' => 'KC MAXINNE A. MENDONES',
                'position' => 'External Vice Chairperson',
                'college' => 'College of Science',
                'email' => 'kmam2022-3284-64835@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/mendones.png',
            ],
            [
                'name' => 'RANCIA LEI B. BULAWAN',
                'position' => 'Secretary-General',
                'college' => 'College of Business, Economics, and Management',
                'email' => 'rancialeibarcelona.bulawan@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/bulawan.png',
            ],
            [
                'name' => 'BEA LYZZAH B. MADRONIO',
                'position' => 'Deputy Secretary-General',
                'college' => 'College of Business, Economics, and Management',
                'email' => 'blbm2022-9271-60342@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/madronio.png',
            ],
            [
                'name' => 'YANCY S. BERMAS',
                'position' => 'Finance Officer',
                'college' => 'College of Engineering',
                'email' => 'yancysalinas.bermas@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/bermas.png',
            ],
            [
                'name' => 'ZHARISSE S. DE LOS SANTOS',
                'position' => 'Deputy Finance Officer',
                'college' => 'College of Engineering',
                'email' => 'zharissesantos.delossantos@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/delos-santos.png',
            ],
            [
                'name' => 'ARIANNA KESI A. DIGO',
                'position' => 'Auditor',
                'college' => 'College of Business, Economics, and Management',
                'email' => 'ariannakesiarmero.digo@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/digo.png',
            ],
            [
                'name' => 'IZEL B. MANATA',
                'position' => 'Business Manager',
                'college' => 'College of Arts and Letters',
                'email' => 'ibm2022-7479-16079@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/manata.png',
            ],
            [
                'name' => 'KYLE REUBEN O. BRON',
                'position' => 'Public Information Officer',
                'college' => 'College of Social Sciences and Philosophy',
                'email' => 'krob2022-8625-72115@bicol-u.edu.ph',
                'year_range' => '2024-2025',
                'image_url' => '/images/executive-council/bron.png',
            ],
        ];

        foreach ($usc_officials as $usc_official) {
            UscOfficial::create($usc_official);
        }
    }
}
