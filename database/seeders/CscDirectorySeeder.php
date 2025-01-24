<?php

namespace Database\Seeders;

use App\Models\CscDirectory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CscDirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csc_directories = [
            [
                'name' => 'College of Arts and Letters',
                'abbr' => 'BUCAL CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucal.png',
            ], // 1 - CAL
            [
                'name' => 'College of Business, Economics, and Management',
                'abbr' => 'BUCBEM CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucbem.jpeg',
            ], // 2 - CBEM
            [
                'name' => 'College of Dental Medicine',
                'abbr' => 'BUCDM CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucdm.png',
            ], // 3 - CDM
            [
                'name' => 'College of Education',
                'abbr' => 'BUCE CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/buce.png',
            ], // 4 - CE
            [
                'name' => 'College of Engineering',
                'abbr' => 'BUCENG CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/buceng.png',
            ], // 5 - CENG
            [
                'name' => 'College of Industrial Technology',
                'abbr' => 'BUCIT CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucit.jpg',
            ], // 6 - CIT
            [
                'name' => 'College of Law',
                'abbr' => 'BUCL CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucl.jpg',
            ], // 7 - CL
            [
                'name' => 'College of Medicine',
                'abbr' => 'BUCM CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucm.png',
            ], // 8 - CM
            [
                'name' => 'College of Nursing',
                'abbr' => 'BUCN CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucn.jpg',
            ], // 9 - CN
            [
                'name' => 'College of Science',
                'abbr' => 'BUCS CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucs.png',
            ], // 10 - CS
            [
                'name' => 'College of Social Sciences and Philosophy',
                'abbr' => 'BUCSSP CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucssp.png',
            ], // 11 - CSSP
            [
                'name' => 'Bicol University Institute of Design and Architecture',
                'abbr' => 'BUIDeA CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/buidea.png',
            ], // 12 - IDeA
            [
                'name' => 'Bicol University Institute of Physical Education, Sports, and Recreation',
                'abbr' => 'BUIPESR CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/buipesr.png',
            ], // 13 - IPESR
            [
                'name' => 'Bicol University Jesse M. Robredo Institute of Governance and Development',
                'abbr' => 'JMRIGD CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/jmrigd.jpg',
            ], // 14 - JMRIGD
            [
                'name' => 'Bicol University Gubat',
                'abbr' => 'BUGC CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bugc.png',
            ], // 15 - GC
            [
                'name' => 'Bicol University Guinobatan',
                'abbr' => 'BU Guinobatan CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bu-guinobatan.jpg',
            ], // 16 - Guinobatan
            [
                'name' => 'Bicol University Polangui',
                'abbr' => 'BUPC CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bupc.png',
            ], // 17 - PC
            [
                'name' => 'Bicol University Tabaco',
                'abbr' => 'BUTC CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/butc.png',
            ], // 18 - TC
        ];

        foreach ($csc_directories as $csc_directory) {
            CscDirectory::create($csc_directory);
        }
    }
}
