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
                'email' => 'bucal-csc@bicol-u.edu.ph',
                'location' => 'Bicol University Main Campus, 1/F College of Arts and Letters (CAL) New Building, Daraga, Albay',
            ], // 1 - CAL
            [
                'name' => 'College of Business, Economics, and Management',
                'abbr' => 'BUCBEM CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucbem.jpeg',
                'email' => 'bucbem-csc@bicol-u.edu.ph',
                'location' => 'Room 106 1/F Seva Building, Bicol University Daraga Campus, Rizal Street, Sagpon, Daraga, Albay',
            ], // 2 - CBEM
            [
                'name' => 'College of Dental Medicine',
                'abbr' => 'BUCDM CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucdm.png',
                'email' => 'bucdm.csc@bicol-u.edu.ph',
                'location' => 'College of Dental Medicine Building, Bicol University Main Campus, Daraga, Albay',
            ], // 3 - CDM
            [
                'name' => 'College of Education',
                'abbr' => 'BUCE CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/buce.png',
                'email' => 'buce-csc@bicol-u.edu.ph',
                'location' => 'CB 101 Bicol University Main Campus, Sagpon, Daraga, Albay',
            ], // 4 - CE
            [
                'name' => 'College of Engineering',
                'abbr' => 'BUCENG CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/buceng.png',
                'email' => 'buceng-csc@bicol-u.edu.ph',
                'location' => 'CENG Student Union Center, Mechanical Engineering Building, BU East Campus, Legazpi City, Albay',
            ], // 5 - CENG
            [
                'name' => 'College of Industrial Technology',
                'abbr' => 'BUCIT CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucit.jpg',
                'email' => 'bucit-csc@bicol-u.edu.ph',
                'location' => 'New ELT Building, Bicol University East Campus, Barangay 1 – Em’s Barrio, Legazpi City, Albay',
            ], // 6 - CIT
            [
                'name' => 'College of Law',
                'abbr' => 'BUCL CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucl.jpg',
                'email' => 'bucl-csc@bicol-u.edu.ph',
                'location' => '3/F Aquilino P. Bonto Bldg., Bicol University Main Campus, Legazpi City, Albay',
            ], // 7 - CL
            [
                'name' => 'College of Medicine',
                'abbr' => 'BUCM CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucm.png',
                'email' => 'bucm-csc@bicol-u.edu.ph',
                'location' => 'Health and Sciences Building, BU College of Medicine, Daraga, Albay',
            ], // 8 - CM
            [
                'name' => 'College of Nursing',
                'abbr' => 'BUCN CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucn.jpg',
                'email' => 'bucn-csc@bicol-u.edu.ph',
                'location' => '2/F Room 205 (NSTP Office), Bicol University Main Campus, College of Nursing, Legazpi City, Albay',
            ], // 9 - CN
            [
                'name' => 'College of Science',
                'abbr' => 'BUCS CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucs.png',
                'email' => 'bucs-csc@bicol-u.edu.ph',
                'location' => '2/F Building 2 College of Science, Bicol University Main Campus, Rizal Street, Legazpi City, Albay',
            ], // 10 - CS
            [
                'name' => 'College of Social Sciences and Philosophy',
                'abbr' => 'BUCSSP CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bucssp.png',
                'email' => 'bucssp-csc@bicol-u.edu.ph',
                'location' => 'Dr. Ricardo Arcilla Building, Bicol University Daraga Campus, Rizal Street, Sagpon, Daraga, Albay',
            ], // 11 - CSSP
            [
                'name' => 'Bicol University Institute of Design and Architecture',
                'abbr' => 'BUIDeA CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/buidea.png',
                'email' => 'buia-csc@bicol-u.edu.ph',
                'location' => 'Room A203, 2/F Architecture Building, Bicol University East Campus, Legazpi City, Albay',
            ], // 12 - IDeA
            [
                'name' => 'Bicol University Institute of Physical Education, Sports, and Recreation',
                'abbr' => 'BUIPESR CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/buipesr.png',
                'email' => 'buipesr-csc@bicol-u.edu.ph',
                'location' => 'Old Grandstand, Bicol University Main Campus, Sagpon, Daraga, Albay',
            ], // 13 - IPESR
            [
                'name' => 'Bicol University Jesse M. Robredo Institute of Governance and Development',
                'abbr' => 'JMRIGD CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/jmrigd.jpg',
                'email' => 'jmrigd-csc@bicol-u.edu.ph',
                'location' => '3/F Aquilino P. Bonto Bldg, Bicol University Main Campus, Legazpi City, Albay',
            ], // 14 - JMRIGD
            [
                'name' => 'Bicol University Gubat',
                'abbr' => 'BUGC CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bugc.png',
                'email' => 'bugc-csc@bicol-u.edu.ph',
                'location' => '2/F Bicol University Gubat Campus Old Building, Rizal Street, Pinontingan, Gubat, Sorsogon',
            ], // 15 - GC
            [
                'name' => 'Bicol University Guinobatan',
                'abbr' => 'BU Guinobatan CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bu-guinobatan.jpg',
                'email' => 'bucaf-csc@bicol-u.edu.ph',
                'location' => 'FTC Hall, Bicol University Guinobatan, Morera, Guinobatan, Albay',
            ], // 16 - Guinobatan
            [
                'name' => 'Bicol University Polangui',
                'abbr' => 'BUPC CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/bupc.png',
                'email' => 'bupc-csc@bicol-u.edu.ph',
                'location' => 'Center For Student Services Building, Bicol University Polangui, Centro Occidental, Polangui, Albay',
            ], // 17 - PC
            [
                'name' => 'Bicol University Tabaco',
                'abbr' => 'BUTC CSC',
                'year_range' => '2024-2025',
                'image_url' => '/storage/images/csc-logos-2024-2025/butc.png',
                'email' => 'butc-csc@bicol-u.edu.ph',
                'location' => 'New Academic Building, Bicol University Tabaco, M.H. Del Pillar St., Tayhi, Tabaco City, Albay',
            ], // 18 - TC
        ];

        foreach ($csc_directories as $csc_directory) {
            CscDirectory::create($csc_directory);
        }
    }
}
