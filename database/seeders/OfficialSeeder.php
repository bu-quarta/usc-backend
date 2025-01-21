<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = Carbon::now(); // Get the current timestamp

        $officials = [
            // CDM CSC Officials
            [
                'name' => 'Lance A. Paje',
                'position' => 'President',
                'email' => 'lap2022-4005-18422@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 9,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Rica Mari B. Labao',
                'position' => 'Vice President',
                'email' => 'rmbl2023-6334-65317@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 9,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Joyze R. Fagela',
                'position' => 'Secretary',
                'email' => 'cjrf2022-6415-85110@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 9,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Xyvea B. Belen',
                'position' => 'Treasurer',
                'email' => 'xbb2022-2320-73432@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 9,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Hannah Joy B. Mariscotes',
                'position' => 'Auditor',
                'email' => 'hjsm2023-3256-24392@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 9,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Princess Marie O. Cabintoy',
                'position' => 'Business Manager',
                'email' => 'pmoc2023-8627-33923@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 9,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Carl Owen B. Madrona',
                'position' => 'P.I.O',
                'email' => 'cobm2023-2135-27391@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 9,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Hans Kristian B. Canales',
                'position' => 'Representative',
                'email' => 'hkbc2022-6043-31260@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 9,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],

            // BUCE CSC Officials
            [
                'name' => 'Shieralyn M. De La Torre',
                'position' => 'President',
                'email' => 'shieralynmosquite.delatorre@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Andy M. Obido',
                'position' => 'Vice President',
                'email' => null,
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Marina N. Belista',
                'position' => 'Secretary',
                'email' => 'mnb2022-1264-28798@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jett Prinze T. Batalla',
                'position' => 'Treasurer',
                'email' => 'jettprinzetabajonda.batalla@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Christian George C. Berso',
                'position' => 'Auditor',
                'email' => 'cgcb2022-7029-29727@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Mark James M. Regala',
                'position' => 'Business Manager',
                'email' => 'markjamesmallen.regala@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'John Michael S. Oxales',
                'position' => 'P.I.O',
                'email' => 'johnmichaelsachon.oxales@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Francis Ferhol A. Borras',
                'position' => 'Representative',
                'email' => 'francisferholaspa.borras@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jay Mar A. Barcenas',
                'position' => 'Representative',
                'email' => 'jmab2022-8413-27275@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kathleen Joy G. Lalaguna',
                'position' => 'Representative',
                'email' => 'kjgl2022-3709-51234@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jenny Lee C. Competente',
                'position' => 'Representative',
                'email' => 'jlcc2022-8632-95131@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Christian C. Alcera',
                'position' => 'Representative',
                'email' => 'cca2023-6151-44146@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 6,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],

            // BUCENG CSC Officials
            [
                'name' => 'Hannah Erika N. Magayanes',
                'position' => 'President',
                'email' => 'hannaherikanate.magayanes@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jureen Dominique E. Sese',
                'position' => 'Vice President',
                'email' => 'jdes2022-6474-33556@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Marifranz S. Rico',
                'position' => 'Secretary',
                'email' => 'msr2022-9906-28166@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Chrisley Mae D. Pacardo',
                'position' => 'Treasurer',
                'email' => 'chrisleymaedexisne.pacardo@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Lei Marie F. Avila',
                'position' => 'Auditor',
                'email' => 'lmfa2022-9322-28652@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Russell Kent D. Manorina',
                'position' => 'Business Manager',
                'email' => 'rkdm2022-4023-52637@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Daryl O. Llona',
                'position' => 'P.I.O',
                'email' => 'dol2022-8679-33346@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Mariel Sophia F. Rosero',
                'position' => 'Representative',
                'email' => 'msfr2023-2760-11827@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Eva Micah Angela S. Casida',
                'position' => 'Representative',
                'email' => 'evamicahangelasaberon.casida@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Khenjie R. Alfonso',
                'position' => 'Representative',
                'email' => 'kra2022-4222-58054@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Gabriel Timothy R. Millete',
                'position' => 'Representative',
                'email' => 'gtrm2022-4009-59724@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Hannah Olivia M. Regoroso',
                'position' => 'Representative',
                'email' => 'hannaholiviamoral.regoroso@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Mark Joseph L. Delas Llagas',
                'position' => 'Representative',
                'email' => 'mjld2022-9510-39237@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Tristandoods L. Melitante',
                'position' => 'Representative',
                'email' => 'tlm2023-2644-46394@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Darwin Isiah L. Gubia',
                'position' => 'Representative',
                'email' => 'dilg2023-2532-77565@bicol-u.edu.ph',
                'college' => 'College of Business, Economics, and Management',
                'directory_id' => 5,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],

            //BUCN CSC

            [
                'name' => 'Jethor Aguilar',
                'position' => 'President',
                'email' => 'jethorapuyan.aguilar@bicol-u.edu.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Erin Marie B. Valencia',
                'position' => 'Vice President',
                'email' => 'erinmarieborromeo.valencia@bicol-u.ed.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Josher Kaylee Aringo',
                'position' => 'Secretary',
                'email' => 'jkra2022-4006-12990@bicol-u.edu.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'John Henry P. Buñag',
                'position' => 'Treasurer',
                'email' => 'johnhenrypatiam.bunag@bicol-u.edu.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Tiffen Cristy S. Balaguer',
                'position' => 'Auditor',
                'email' => 'tcsb2023-5263-90669@bicol-u.edu.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Alliah Mariel Flor',
                'position' => 'Business Manager',
                'email' => 'amdf2023-3640-49822@bicol-u.edu.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Ashley Joeff Malabanan',
                'position' => 'P.I.O',
                'email' => 'ajtm2023-7524-90528@bicol-u.edu.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Mary Kimberly V. Bonto',
                'position' => 'Representative',
                'email' => 'mkvb2023-8450-28165@bicol-u.edu.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Zander B. Vosotros',
                'position' => 'Representative',
                'email' => 'zbv2023-3931-84782@bicol-u.edu.ph',
                'college' => 'College of Nursing',
                'directory_id' => 10,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],            

            //BUCS CSC Officials

            [
                'name' => 'Sarah Balgemino',
                'position' => 'President',
                'email' => 'sab2022-9976-35863@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Lance Stephen Bronzal',
                'position' => 'Vice President',
                'email' => 'lancestephenlorenzana.bronzal@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jahna Collantes',
                'position' => 'Secretary',
                'email' => 'jcc2022-6946-35526@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Chen Yesha Tangelon',
                'position' => 'Treasurer',
                'email' => 'cyat2022-5791-48922@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Aliyah Charlize Labandilo',
                'position' => 'Auditor',
                'email' => 'acal2023-2864-90545@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'James Bryan Quińones',
                'position' => 'Business Manager',
                'email' => 'jboq2022-4334-56190@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Aizer Quelvin Bacerdo',
                'position' => 'P.I.O',
                'email' => 'aizerquelvinabad.bacerdo@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jenny Mae Bueno',
                'position' => 'Representative',
                'email' => 'jmbb2023-9604-98159@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Chenie Nińa Buergo',
                'position' => 'Representative',
                'email' => 'cneb2023-9303-29279@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jonasenh Anthone Lavapie',
                'position' => 'Representative',
                'email' => 'jabl2023-7110-28797@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Simon Angelo Karlo Narvaez',
                'position' => 'Representative',
                'email' => 'saksn2023-8728-77086@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Angelo Jose Rico',
                'position' => 'Representative',
                'email' => 'ajsr2023-9776-81830@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 11,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],            

            //BUCSSP CSC Officials
            [
                'name' => 'Marck Lester Esto',
                'position' => 'President',
                'email' => 'mlbe2022-8477-81660@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Eduardo Manuel Pares',
                'position' => 'Vice President',
                'email' => 'empp2022-4888-46653@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kristine Millena',
                'position' => 'Secretary',
                'email' => 'knm2022-4354-68166@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kiandro Jadie',
                'position' => 'Treasurer',
                'email' => 'kiandroabrigo.jadie@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Ashleigh Danielle Ladesma',
                'position' => 'Auditor',
                'email' => 'adgl2023-7133-30427@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Franco Vergel Manongsong',
                'position' => 'Business Manager',
                'email' => 'fvjm2023-8226-83296@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jan Sander Aban',
                'position' => 'P.I.O',
                'email' => 'jsba2023-6701-86719@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Ivan Rosero',
                'position' => 'Representative',
                'email' => 'ipr2022-1871-77263@bicol.u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Joriel Alecks Calleja',
                'position' => 'Representative',
                'email' => 'japc2023-3646-64870@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Dave Russell Advincula',
                'position' => 'Representative',
                'email' => 'drca2023-9051-21670@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Mareil Lizor',
                'position' => 'Representative',
                'email' => 'mcl2022-2206-56920@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Darios John Antonio',
                'position' => 'Representative',
                'email' => 'djea2023-8231-53429@bicol-u.edu.ph',
                'college' => 'College of Social Sciences and Philosopy',
                'directory_id' => 12,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],

            //BUIDEA CSC Officials
            [
                'name' => 'Homer Reden Desolo',
                'position' => 'President',
                'email' => 'homerredenloquinario.desolo@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Tristin Karmel De Mesa',
                'position' => 'Vice President',
                'email' => 'tristinkarmelfelipe.demesa@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kirsten Zee De Castro',
                'position' => 'Secretary',
                'email' => 'kzd2022-3021-24536@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Hilary Cervantes',
                'position' => 'Treasurer',
                'email' => 'hac2022-3356-80286@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jay Rico Espelita',
                'position' => 'Auditor',
                'email' => 'jayriconarciza.espelita@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Gabriel Ryan Ocromas',
                'position' => 'Business Manager',
                'email' => 'grbo2023-7392-14145@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jeri Ella Marie Paja',
                'position' => 'P.I.O',
                'email' => 'jemep2023-8545-46832@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Rojan Paul Biñas',
                'position' => 'Representative',
                'email' => 'rpab2023-8394-67820@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kerwin Aje Cedeño',
                'position' => 'Representative',
                'email' => 'kacc2021-1710-62323@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kyle Mira Navarro',
                'position' => 'Representative',
                'email' => 'kmen2023-5436-14162@bicol-u.edu.ph',
                'college' => 'College of Institute of Design and Architecture',
                'directory_id' => 13,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            
            //BUIPESR CSC Officials

            [
                'name' => 'James Harold S. Lim',
                'position' => 'President',
                'email' => 'jhsl2022-7623-59089@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Fiona Jane M. Abejuro',
                'position' => 'Vice President',
                'email' => 'fjma2022-8152-87418@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Cyrus G. Tesoro',
                'position' => 'Secretary',
                'email' => 'cgt2020-5189-10648@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'James Fortes',
                'position' => 'Treasurer',
                'email' => 'james.fortes@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Antonio Luis M. Lanuza III',
                'position' => 'Auditor',
                'email' => 'alml2023-8032-51848@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Paul Angelo D. Antivola',
                'position' => 'Business Manager',
                'email' => 'pada2022-12912@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Queen Adhel D. Alvarez',
                'position' => 'P.I.O',
                'email' => 'qada2023-1464-11930@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Gian Carlo L. Morada',
                'position' => 'Representative',
                'email' => 'gclm2022-3794-32893@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jenalyn Verdeflor',
                'position' => 'Representative',
                'email' => 'jv2022-7322-30049@bicol-u.edu.ph',
                'college' => 'College of Institute of Physical Education Sports and Recreation',
                'directory_id' => 14,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],            

            //BUJMRIGD CSC Officials

            [
                'name' => 'Jake Z. Dacir',
                'position' => 'President',
                'email' => 'jzd2022-2292-48160@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 15,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Lebron James A. Arao',
                'position' => 'Vice President',
                'email' => 'ljaa2023-5692-29285@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 15,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Nicole D. Duran',
                'position' => 'Secretary',
                'email' => 'ndd2022-3424-20672@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 15,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Danielle G. De Mesa',
                'position' => 'Treasurer',
                'email' => 'dgd2022-9468-30451@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 15,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Thomas Josh V. Genova',
                'position' => 'Auditor',
                'email' => 'tjvg2023-7902-7214@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 15,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Ishi Claire A. Mendones',
                'position' => 'Business Manager',
                'email' => 'icam2023-8369-68791@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 15,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Mark Tristan N. Quiano',
                'position' => 'P.I.O',
                'email' => 'mtnq2023-1761-30376@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 15,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Justin David V. Reynoso',
                'position' => 'Representative',
                'email' => 'jdvr2023-6700-79946@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 15,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],            

            //BUGC CSC Officials

            [
                'name' => 'Angelina E. Eva',
                'position' => 'President',
                'email' => 'angelinaenaje.eva@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Rico D. Diolata',
                'position' => 'Vice President',
                'email' => 'ricodiche.diolata@bicol-edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Maye Celeste F. Ortiz',
                'position' => 'Secretary',
                'email' => 'mayecelesteferol.ortiz@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Bea Rica E. Estayan',
                'position' => 'Treasurer',
                'email' => 'bree2022-6194-44137@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 1,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jhoanna Joy E. Aquino',
                'position' => 'Auditor',
                'email' => 'jjea2023-2112-33802@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kienlyn Anthonette D. Gorobat',
                'position' => 'Business Manager',
                'email' => 'kienlynantonettedorado.gorobat@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'John Earl G. Peralta',
                'position' => 'P.I.O',
                'email' => 'jegp2023-9662-80447@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Mark D. Estrellado',
                'position' => 'Representative',
                'email' => 'markdimaano.estrellado@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Leiane V. Baloyo',
                'position' => 'Representative',
                'email' => 'leianevergara.baloyo@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'James Ryan Luna',
                'position' => 'Representative',
                'email' => 'jrl2023-7201-39274@bicol-u.edu.ph',
                'college' => 'College of Jesse M. Robredo Institute of Governance and Development',
                'directory_id' => 16,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],            

            //BUCAF CSC Officials

            [
                'name' => 'Gwyneth E. Bellen',
                'position' => 'President',
                'email' => 'gwynethescarilla.bellen@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Quezen V. Nanson',
                'position' => 'Vice President',
                'email' => 'quezenvibar.nanson@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Maui S. Roberto',
                'position' => 'Secretary',
                'email' => 'msr2022-1768-41522@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jessa Mae C. Millar',
                'position' => 'Treasurer',
                'email' => 'jmcm2022-4491-95897@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Danah Faye O. Nocos',
                'position' => 'Auditor',
                'email' => 'dfon2022-3751-95264@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Joana Vanessa C. Cinco',
                'position' => 'Business Manager',
                'email' => 'jvcc2022-4554-84744@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Leonard A. Foster III',
                'position' => 'P.I.O',
                'email' => 'laf2023-4234-16239@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Josie N. Naz',
                'position' => 'Representative',
                'email' => 'jnn2023-4288-30566@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Honey Grace L. Noleal',
                'position' => 'Representative',
                'email' => 'hgln2023-5429-63780@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jenessa D. Dionela',
                'position' => 'Representative',
                'email' => 'jdd2022-3831-21873@bicol-u.edu.ph',
                'college' => 'College of Agriculture and Forestry',
                'directory_id' => 17,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],            

            //BUPC CSC Officials

            [
                'name' => 'Jhon Rey Salem',
                'position' => 'President',
                'email' => 'jres2022-3736-71559@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Princess Angel Cañutal',
                'position' => 'Vice President',
                'email' => 'pac2022-3577-83846@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Joyce Arevalo',
                'position' => 'Secretary',
                'email' => 'jma2022-4350-36463@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Janmark Saguirre',
                'position' => 'Treasurer',
                'email' => 'jri2022-5540-98003@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Nico Sayat',
                'position' => 'Auditor',
                'email' => 'nicobarbacena.sayat@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Gherlyn Sarturio',
                'position' => 'Business Manager',
                'email' => 'gts2022-5175-83113@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Aviel Blaise Bueno',
                'position' => 'P.I.O',
                'email' => 'abdb2023-3291-30240@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Samantha Joy Alcantara',
                'position' => 'Representative',
                'email' => 'sjsa2023-4525-20701@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Sharlene Jane Alcantara',
                'position' => 'Representative',
                'email' => 'sjsa2023-6927-48337@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Mark Joseph Rañada',
                'position' => 'Representative',
                'email' => 'mjfr2023-1098-86604@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'John Paul Imperio',
                'position' => 'Representative',
                'email' => 'sjsa2023-6927-48337@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Christian Reondanga',
                'position' => 'Representative',
                'email' => 'christianoloya.reondanga@bicol-u.com.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Ronie Bambe',
                'position' => 'Representative',
                'email' => 'rob2023-5095-60552@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Faridha De Lima',
                'position' => 'Representative',
                'email' => 'ftd2022-7319-70534@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Christian Jake Solano',
                'position' => 'Representative',
                'email' => 'cjps2023-9857-34661@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jecel Martillan',
                'position' => 'Representative',
                'email' => 'jom2022-5121-24683@bicol-u.edu.ph',
                'college' => 'College of Polangui',
                'directory_id' => 18,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],            

            //BUTC CSC Officials
            [
                'name' => 'Rodel B. Bataller',
                'position' => 'President',
                'email' => 'rodelbrutas.bataller@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Christian Jess J. Almonte',
                'position' => 'Vice President',
                'email' => 'christianjessjose.almonte@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Raymon Jay Boncacas',
                'position' => 'Secretary',
                'email' => 'rjbb2022-7506-65724@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jinky Marollano',
                'position' => 'Treasurer',
                'email' => 'jinkynuarin.marollano@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Julianne P. Springael',
                'position' => 'Auditor',
                'email' => 'juliannepenero.springael@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Ilona Kate B. Blancaflor',
                'position' => 'Business Manager',
                'email' => 'ikbb2022-6881-16598@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Gilan Francheska B. Borlagdan',
                'position' => 'P.I.O',
                'email' => 'gfbb2023-6308-17993@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Chrisjon Rupert B. Bongat',
                'position' => 'Representative',
                'email' => 'crbb2023-8313-52290@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Precious Yvette C. Boragay',
                'position' => 'Representative',
                'email' => 'pycb2023-8774-30361@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Marie Kaye B. Miralo',
                'position' => 'Representative',
                'email' => 'mkbm2023-7562-14000@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Ruth S. Bello',
                'position' => 'Representative',
                'email' => 'rsb2023-6020-27836@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'April Bobis',
                'position' => 'Representative',
                'email' => 'ab2023-7404-59116@bicol-u.edu.ph',
                'college' => 'College of Tabaco',
                'directory_id' => 19,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],  
            
            //USC Presidents
            [
                'name' => 'CARLO BONGALON',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'College of Engineering',
                'directory_id' => 3,
                'start_year' => 1997,
                'end_year' => 1998,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'RHONDON RICAFORT',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'College of Education',
                'directory_id' => 3,
                'start_year' => 1998,
                'end_year' => 1999,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'GARRY LUNAS',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 1999,
                'end_year' => 2000,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'FLODEL OROSCO',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Arts and Sciences',
                'directory_id' => 3,
                'start_year' => 2000,
                'end_year' => 2001,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ERNAND BRIOBO',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2001,
                'end_year' => 2002,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'EDDIE BALUNSO',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Arts and Sciences',
                'directory_id' => 3,
                'start_year' => 2002,
                'end_year' => 2003,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'PARLE BARON',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2003,
                'end_year' => 2004,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'BENIGNO AUSTERO',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Arts and Sciences',
                'directory_id' => 3,
                'start_year' => 2004,
                'end_year' => 2005,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'EXPEDITO LOBETANIA JR.',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Education',
                'directory_id' => 3,
                'start_year' => 2005,
                'end_year' => 2006,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MICHAEL MALANO',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2006,
                'end_year' => 2008,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'EDIZON DIVINAFLOR',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2008,
                'end_year' => 2009,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'JESSICA BIASCA',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2009,
                'end_year' => 2010,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MARIA DAISY LLENO',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Social Sciences and Philosophy',
                'directory_id' => 3,
                'start_year' => 2010,
                'end_year' => 2011,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'RUTHER FLORES',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Education',
                'directory_id' => 3,
                'start_year' => 2011,
                'end_year' => 2012,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'RACHELLE ANN L. MIRANDA',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Education',
                'directory_id' => 3,
                'start_year' => 2012,
                'end_year' => 2013,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MARK HARRIS LIM',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Arts and Letters',
                'directory_id' => 3,
                'start_year' => 2013,
                'end_year' => 2014,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ADELAINE BAUTISTA',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Arts and Letters',
                'directory_id' => 3,
                'start_year' => 2014,
                'end_year' => 2015,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'IRENE KAYLE SANTILLAN',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Social Sciences and Philosophy',
                'directory_id' => 3,
                'start_year' => 2015,
                'end_year' => 2016,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'PATRICK ANTHONY R. NOTA',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2016,
                'end_year' => 2017,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'EARL VINCENT H. VISTA',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Education',
                'directory_id' => 3,
                'start_year' => 2017,
                'end_year' => 2018,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Brian Mitchel De La Rama',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2018,
                'end_year' => 2019,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'IVAN IAN BARIA',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2019,
                'end_year' => 2020,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'VINCE JOSEPH VIBAR',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Social Sciences and Philosophy',
                'directory_id' => 3,
                'start_year' => 2020,
                'end_year' => 2021,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MARC LOUIE ALER',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Nursing',
                'directory_id' => 3,
                'start_year' => 2021,
                'end_year' => 2022,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ASHER JADE T. AZUL',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Engineering',
                'directory_id' => 3,
                'start_year' => 2022,
                'end_year' => 2023,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'REMEE ESTEFANY P. BALDORADO',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Social Sciences and Philosophy',
                'directory_id' => 3,
                'start_year' => 2023,
                'end_year' => 2024,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'STACY DANIEL V. ALAMARES',
                'position' => 'Chairperson and Student Regent',
                'email' => null,
                'college' => 'BU College of Arts and Letters',
                'directory_id' => 3,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
        
            //DEVELOPERS
            [
                'name' => 'JEDDY C. CERTIFICO',
                'position' => 'Full-Stack Developer',
                'email' => null,
                'college' => 'College of Science',
                'directory_id' => 4,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ALVIN S. NARIO',
                'position' => 'Backend Developer',
                'email' => 'alvinsalle.nario@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 4,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'TRINA CHARIZ B. HIBO',
                'position' => 'System Analyst',
                'email' => 'trinacharizbalaguer.hibo@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 4,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'HAZEL ANNE B. MARQUESES',
                'position' => 'Project Manager',
                'email' => 'hazelannebanez.marqueses@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 4,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MISTY SHAINE S. NIONES',
                'position' => 'UI/UX Designer',
                'email' => 'mistyshainesambajon.niones@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 4,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ELJOHN PAULO C. LOTERTE',
                'position' => 'Assistant UI/UX Designer',
                'email' => 'epcl2023-2505-62222@bicol-u.edu.ph',
                'college' => 'College of Science',
                'directory_id' => 4,
                'start_year' => 2024,
                'end_year' => 2025,
                'created_at' => $now,
                'updated_at' => $now
            ],
            
        ];

        DB::table('officials')->insert($officials);
    }
}
