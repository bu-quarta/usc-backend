<?php

namespace Database\Seeders;

use App\Models\CscOfficial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CscOfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csc_officials = [
            // CSC Directory 1
            [
                'position' => 'President',
                'name' => 'Yesha Faye Cruz',
                'email' => 'yeshafayebiclar.cruz@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Vice President',
                'name' => 'Marc Allen De La Paz',
                'email' => 'marcallendejesus.delapaz@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Secretary',
                'name' => 'Charlotte Jay Samson',
                'email' => 'cjms2022-9847-52889@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Ma. Sofia Belgar',
                'email' => 'masofiabongalon.belgar@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Auditor',
                'name' => 'Kristine Belle Atienza',
                'email' => 'kristinebelleborromeo.atienza@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Jabez Job Sta. Ana',
                'email' => 'jjas2023-3183-67461@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Justin B. Blanza',
                'email' => 'justinbequillo.blanza@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Representative',
                'name' => 'Edmean Julius Cobilla',
                'email' => 'ejcc2023-9890-63548@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Representative',
                'name' => 'Justine Francesca Jesalva',
                'email' => 'jvp2023-3568-17233@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Representative',
                'name' => 'Jenelle Palma',
                'email' => 'imcm2023-3359-50247@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Representative',
                'name' => 'Ihra Mae Madrideo',
                'email' => 'cindyatillo.grayda@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],
            [
                'position' => 'Representative',
                'name' => 'Cindy Grayda',
                'email' => 'jfbj20226873-50554@bicol-u.edu.ph',
                'csc_directory_id' => 1
            ],

            // CSC Directory 2
            [
                'position' => 'President',
                'name' => 'Aaron Joaquin M. Lazala',
                'email' => 'aaronjoaquinmercado.lazala@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Vice President',
                'name' => 'Ma. Lyka F. Magallano',
                'email' => 'malykafernandez.magallano@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Secretary',
                'name' => 'Alzen A. Floresca',
                'email' => 'alzenalansigan.floresca@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Yman Romel A. Logenio',
                'email' => 'ymanromelandes.logenio@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Auditor',
                'name' => 'Melinda M. Mingoy',
                'email' => 'melindamarantal.mingoy@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Julius Ruzzel A. Loñosa',
                'email' => 'juliusruzzelasis.lonosa@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Jay C. Reula',
                'email' => 'jcr2022-4648-82461@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Representative',
                'name' => 'Francine Faith V. Añonuevo',
                'email' => 'ffva2023-3422-39663@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Representative',
                'name' => 'Clarenz B. Poseran',
                'email' => 'clarenzbasallote.poseran@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Representative',
                'name' => 'Roxanne Mae G. Montero',
                'email' => 'rmgm2022-8219-95857@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Representative',
                'name' => 'Denmark Gil C. Leopardas',
                'email' => 'dgcl2023-4113-24982@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Representative',
                'name' => 'Camia Mae Ledesma Verallo',
                'email' => 'cmlv2023-5877-48525@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Representative',
                'name' => 'Lorenz A. Sayson',
                'email' => 'las2023-7379-37150@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Representative',
                'name' => 'Micah Mae B. Baliduya',
                'email' => 'mmbb2022-7425-89610@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],
            [
                'position' => 'Representative',
                'name' => 'Patricia Anne A. Rico',
                'email' => 'patriciaanneatractivo.rico@bicol-u.edu.ph',
                'csc_directory_id' => 2
            ],

            // CSC Directory 3
            [
                'position' => 'President',
                'name' => 'Lance A. Paje',
                'email' => 'lap2022-4005-18422@bicol-u.edu.ph',
                'csc_directory_id' => 3
            ],
            [
                'position' => 'Vice President',
                'name' => 'Rica Mari B. Labao',
                'email' => 'rmbl2023-6334-65317@bicol-u.edu.ph',
                'csc_directory_id' => 3
            ],
            [
                'position' => 'Secretary',
                'name' => 'Joyze R. Fagela',
                'email' => 'cjrf2022-6415-85110@bicol-u.edu.ph',
                'csc_directory_id' => 3
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Xyvea B. Belen',
                'email' => 'xbb2022-2320-73432@bicol-u.edu.ph',
                'csc_directory_id' => 3
            ],
            [
                'position' => 'Auditor',
                'name' => 'Hannah Joy B. Mariscotes',
                'email' => 'hjsm2023-3256-24392@bicol-u.edu.ph',
                'csc_directory_id' => 3
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Princess Marie O. Cabintoy',
                'email' => 'pmoc2023-8627-33923@bicol-u.edu.ph',
                'csc_directory_id' => 3
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Carl Owen B. Madrona',
                'email' => 'cobm2023-2135-27391@bicol-u.edu.ph',
                'csc_directory_id' => 3
            ],
            [
                'position' => 'Representative',
                'name' => 'Hans Kristian B. Canales',
                'email' => 'hkbc2022-6043-31260@bicol-u.edu.ph',
                'csc_directory_id' => 3
            ],

            // CSC Directory 4
            [
                'position' => 'President',
                'name' => 'Shieralyn M. De La Torre',
                'email' => 'shieralynmosquite.delatorre@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Vice President',
                'name' => 'Andy M. Obido',
                'email' => '', // Email is missing in the CSV
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Secretary',
                'name' => 'Marina N. Belista',
                'email' => 'mnb2022-1264-28798@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Jett Prinze T. Batalla',
                'email' => 'jettprinzetabajonda.batalla@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Auditor',
                'name' => 'Christian George C. Berso',
                'email' => 'cgcb2022-7029-29727@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Mark James M. Regala',
                'email' => 'markjamesmallen.regala@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'P.I.O',
                'name' => 'John Michael S. Oxales',
                'email' => 'johnmichaelsachon.oxales@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Representative',
                'name' => 'Francis Ferhol A. Borras',
                'email' => 'francisferholaspa.borras@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Representative',
                'name' => 'Jay Mar A. Barcenas',
                'email' => 'jmab2022-8413-27275@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Representative',
                'name' => 'Kathleen Joy G. Lalaguna',
                'email' => 'kjgl2022-3709-51234@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Representative',
                'name' => 'Jenny Lee C. Competente',
                'email' => 'jlcc2022-8632-95131@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],
            [
                'position' => 'Representative',
                'name' => 'Christian C. Alcera',
                'email' => 'cca2023-6151-44146@bicol-u.edu.ph',
                'csc_directory_id' => 4
            ],

            // CSC Directory 5
            [
                'position' => 'President',
                'name' => 'Hannah Erika N. Magayanes',
                'email' => 'hannaherikanate.magayanes@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Vice President',
                'name' => 'Jureen Dominique E. Sese',
                'email' => 'jdes2022-6474-33556@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Secretary',
                'name' => 'Marifranz S. Rico',
                'email' => 'msr2022-9906-28166@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Chrisley Mae D. Pacardo',
                'email' => 'chrisleymaedexisne.pacardo@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Auditor',
                'name' => 'Lei Marie F. Avila',
                'email' => 'lmfa2022-9322-28652@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Russell Kent D. Manorina',
                'email' => 'rkdm2022-4023-52637@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Daryl O. Llona',
                'email' => 'dol2022-8679-33346@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Representative',
                'name' => 'Mariel Sophia F. Rosero',
                'email' => 'msfr2023-2760-11827@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Representative',
                'name' => 'Eva Micah Angela S. Casida',
                'email' => 'evamicahangelasaberon.casida@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Representative',
                'name' => 'Khenjie R. Alfonso',
                'email' => 'kra2022-4222-58054@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Representative',
                'name' => 'Gabriel Timothy R. Millete',
                'email' => 'gtrm2022-4009-59724@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Representative',
                'name' => 'Hannah Olivia M. Regoroso',
                'email' => 'hannaholiviamoral.regoroso@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Representative',
                'name' => 'Mark Joseph L. Delas Llagas',
                'email' => 'mjld2022-9510-39237@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Representative',
                'name' => 'Tristandoods L. Melitante',
                'email' => 'tlm2023-2644-46394@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],
            [
                'position' => 'Representative',
                'name' => 'Darwin Isiah L. Gubia',
                'email' => 'dilg2023-2532-77565@bicol-u.edu.ph',
                'csc_directory_id' => 5
            ],

            // CSC Directory 6
            [
                'position' => 'President',
                'name' => 'John Mark R. Razon',
                'email' => 'johnmarkrodriguez.razon@bicol-u.edu.ph',
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Vice President',
                'name' => 'Julian Zaragosa Gonzales',
                'email' => 'jzg2022-1837-88619@bicol-u.edu.ph',
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Secretary',
                'name' => 'Mary Angielica C. Onrubia',
                'email' => '', // Email is missing in the CSV
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Moira Zacharee R. Belarmino',
                'email' => '', // Email is missing in the CSV
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Auditor',
                'name' => 'N/A', // Name is "N/A" in the CSV
                'email' => '', // Email is missing in the CSV
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Mae Marjon G. Nior',
                'email' => 'mmgn2023-6463-42014@bicol-u.edu.ph',
                'csc_directory_id' => 6
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Emman Vincent A. Estopare',
                'email' => '', // Email is missing in the CSV
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Representative',
                'name' => 'Kristine Joy Q. Antegra',
                'email' => 'kjqa2023-7321-29411@bicol-u.edu.ph',
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Representative',
                'name' => 'Emalene N. Manuel',
                'email' => '', // Email is missing in the CSV
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Representative',
                'name' => 'Mariane Sibay',
                'email' => '', // Email is missing in the CSV
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Representative',
                'name' => 'Ken RC Bacelonia Bataller',
                'email' => 'krbb2023-3394-13911@bicol-u.edu.ph',
                'csc_directory_id' => 6
            ],
            [
                'position' => 'Representative',
                'name' => 'Myka Diana Luna Alvarado',
                'email' => 'mdla2023-5253-43639@bicol-u.edu.ph',
                'csc_directory_id' => 6
            ],

            // CSC Directory 7
            [
                'position' => 'President',
                'name' => 'Jose Cristobal C. Liwanag',
                'email' => 'jccl2022-5402-15499@bicol-u.edu.ph',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Vice President',
                'name' => 'Von Joseph Lagata',
                'email' => 'vonjosephjeremias.lagata@bicol-u.edu.ph',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Executive Secretary',
                'name' => 'Erwin N. Bañares',
                'email' => 'erwinnogralesbanares@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Finance Secretary',
                'name' => 'Maria Via N. Dometita',
                'email' => 'mariaviadometita09@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Secretary of Internal Affairs',
                'name' => 'Austin Matthew A. Olila',
                'email' => 'amao2023-4247-60711@bicol-u.edu.ph',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Secretary of External Affairs',
                'name' => 'Nicole Angela M. Imperial',
                'email' => 'nicoleangelamustera.imperial@bicol-u.edu.ph',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Communications and Public Relations Secretary',
                'name' => 'Ruffa Mae Lozada',
                'email' => 'ruffalozada18@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Procurement and Logistics Secretary',
                'name' => 'Christian Ray D. Combo',
                'email' => 'christianraycombo0226@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'COA Chairperson',
                'name' => 'Rodolfo Jr. B. Mantes',
                'email' => 'rjbm2022-3495-42630@bicol-u.edu.ph',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Prime Minister',
                'name' => 'Pierre Anthony Alfane',
                'email' => 'alfane.pierreanthony@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'First Year Representative',
                'name' => 'Jamieson Emmanuel D. Dayawon',
                'email' => 'jamiesonemmanuel.delfin.dayawon@bicol-u.edu.ph',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Second Year Representative',
                'name' => 'Ma. Nicole R. Villa',
                'email' => 'vxmanicole@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Third Year Representative',
                'name' => 'Ivy Flosfil R. Pajimola',
                'email' => 'ivypaji@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Fourth Year Representative',
                'name' => 'Jessa Mae M. Bilason',
                'email' => 'jessamaemillena.bilason@bicol-u.edu.ph',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Deputy Finance Secretary',
                'name' => 'Lyndon P. Merciales 1',
                'email' => 'eldonfirst@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Deputy Procurement and Logistics Secretary',
                'name' => 'Romeo Aaron C. Lumibao',
                'email' => 'lumibao.romeo@gmail.com',
                'csc_directory_id' => 7
            ],
            [
                'position' => 'Bar Operations Chairperson',
                'name' => 'James Indaya',
                'email' => 'roniejames.indaya@gmail.com',
                'csc_directory_id' => 7
            ],

            // CSC Directory 8
            [
                'position' => 'Chairperson',
                'name' => 'Lou Vincent Z. Guzman',
                'email' => 'lvzgcm-2022-00052@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],
            [
                'position' => 'Internal Vice Chairperson',
                'name' => 'Jude Anne M. Sardona',
                'email' => 'jamscm-2022-00054@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],
            [
                'position' => 'External Vice Chairperson',
                'name' => 'Sean G. Bufete',
                'email' => 'seangaray.bufete@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],
            [
                'position' => 'Secretary General',
                'name' => 'Mary Antonette R. Perez',
                'email' => 'marp2023-4742-57484@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],
            [
                'position' => 'Deputy Secretary General',
                'name' => 'Jasmin Samantha L. Tusara',
                'email' => 'jasminsamanthalargo.tusara@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],
            [
                'position' => 'Finance Officer',
                'name' => 'Paul Anthony B. Marquez',
                'email' => 'pabmcm-2022-00005@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],
            [
                'position' => 'Auditor',
                'name' => 'Queen Gwyneth O. Francisco',
                'email' => 'qgof2023-7821-77543@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Imma Leya B. Lareza',
                'email' => 'ilbl2023-4133-79136@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Danielle N. Filio',
                'email' => 'dnf2023-7398-12014@bicol-u.edu.ph',
                'csc_directory_id' => 8
            ],

            // CSC Directory 9
            [
                'position' => 'President',
                'name' => 'Jethor Aguilar',
                'email' => 'jethorapuyan.aguilar@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],
            [
                'position' => 'Vice President',
                'name' => 'Erin Marie B. Valencia',
                'email' => 'erinmarieborromeo.valencia@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],
            [
                'position' => 'Secretary',
                'name' => 'Josher Kaylee Aringo',
                'email' => 'jkra2022-4006-12990@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],
            [
                'position' => 'Treasurer',
                'name' => 'John Henry P. Buñag',
                'email' => 'johnhenrypatiam.bunag@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],
            [
                'position' => 'Auditor',
                'name' => 'Tiffen Cristy S. Balaguer',
                'email' => 'tcsb2023-5263-90669@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Alliah Mariel Flor',
                'email' => 'amdf2023-3640-49822@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Ashley Joeff Malabanan',
                'email' => 'ajtm2023-7524-90528@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],
            [
                'position' => 'Representative',
                'name' => 'Mary Kimberly V. Bonto',
                'email' => 'mkvb2023-8450-28165@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],
            [
                'position' => 'Representative',
                'name' => 'Zander B. Vosotros',
                'email' => 'zbv2023-3931-84782@bicol-u.edu.ph',
                'csc_directory_id' => 9
            ],

            // CSC Directory 10
            [
                'position' => 'President',
                'name' => 'Sarah Balgemino',
                'email' => 'sab2022-9976-35863@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Vice President',
                'name' => 'Lance Stephen Bronzal',
                'email' => 'lancestephenlorenzana.bronzal@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Secretary',
                'name' => 'Jahna Collantes',
                'email' => 'jcc2022-6946-35526@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Chen Yesha Tangelon',
                'email' => 'cyat2022-5791-48922@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Auditor',
                'name' => 'Aliyah Charlize Labandilo',
                'email' => 'acal2023-2864-90545@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Business Manager',
                'name' => 'James Bryan Quiñones',
                'email' => 'jboq2022-4334-56190@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Aizer Quelvin Bacerdo',
                'email' => 'aizerquelvinabad.bacerdo@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Representative',
                'name' => 'Jenny Mae Bueno',
                'email' => 'jmbb2023-9604-98159@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Representative',
                'name' => 'Chenie Niña Buergo',
                'email' => 'cneb2023-9303-29279@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Representative',
                'name' => 'Jonasenh Anthone Lavapie',
                'email' => 'jabl2023-7110-28797@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Representative',
                'name' => 'Simon Angelo Karlo Narvaez',
                'email' => 'saksn2023-8728-77086@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],
            [
                'position' => 'Representative',
                'name' => 'Angelo Jose Rico',
                'email' => 'ajsr2023-9776-81830@bicol-u.edu.ph',
                'csc_directory_id' => 10
            ],

            // CSC Directory 11
            [
                'position' => 'President',
                'name' => 'Marck Lester Esto',
                'email' => 'mlbe2022-8477-81660@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Vice President',
                'name' => 'Eduardo Manuel Pares',
                'email' => 'empp2022-4888-46653@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Secretary',
                'name' => 'Kristine Millena',
                'email' => 'knm2022-4354-68166@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Kiandro Jadie',
                'email' => 'kiandroabrigo.jadie@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Auditor',
                'name' => 'Ashleigh Danielle Ladesma',
                'email' => 'adgl2023-7133-30427@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Franco Vergel Manongsong',
                'email' => 'fvjm2023-8226-83296@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Jan Sander Aban',
                'email' => 'jsba2023-6701-86719@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Representative',
                'name' => 'Ivan Rosero',
                'email' => 'ipr2022-1871-77263@bicol.u.edu.ph', // Note: Typo in the domain (should be 'bicol-u.edu.ph')
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Representative',
                'name' => 'Joriel Alecks Calleja',
                'email' => 'japc2023-3646-64870@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Representative',
                'name' => 'Dave Russell Advincula',
                'email' => 'drca2023-9051-21670@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Representative',
                'name' => 'Mareil Lizor',
                'email' => 'mcl2022-2206-56920@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],
            [
                'position' => 'Representative',
                'name' => 'Darios John Antonio',
                'email' => 'djea2023-8231-53429@bicol-u.edu.ph',
                'csc_directory_id' => 11
            ],

            // CSC Directory 12
            [
                'position' => 'President',
                'name' => 'Homer Reden Desolo',
                'email' => 'homerredenloquinario.desolo@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'Vice President',
                'name' => 'Tristin Karmel De Mesa',
                'email' => 'tristinkarmelfelipe.demesa@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'Secretary',
                'name' => 'Kirsten Zee De Castro',
                'email' => 'kzd2022-3021-24536@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Hilary Cervantes',
                'email' => 'hac2022-3356-80286@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'Auditor',
                'name' => 'Jay Rico Espelita',
                'email' => 'jayriconarciza.espelita@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Gabriel Ryan Ocromas',
                'email' => 'grbo2023-7392-14145@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Jeri Ella Marie Paja',
                'email' => 'jemep2023-8545-46832@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'Representative',
                'name' => 'Rojan Paul Biñas',
                'email' => 'rpab2023-8394-67820@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'Representative',
                'name' => 'Kerwin Aje Cedeño',
                'email' => 'kacc2021-1710-62323@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],
            [
                'position' => 'Representative',
                'name' => 'Kyle Mira Navarro',
                'email' => 'kmen2023-5436-14162@bicol-u.edu.ph',
                'csc_directory_id' => 12
            ],

            // CSC Directory 13
            [
                'position' => 'President',
                'name' => 'James Harold S. Lim',
                'email' => 'jhsl2022-7623-59089@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],
            [
                'position' => 'Vice President',
                'name' => 'Fiona Jane M. Abejuro',
                'email' => 'fjma2022-8152-87418@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],
            [
                'position' => 'Secretary',
                'name' => 'Cyrus G. Tesoro',
                'email' => 'cgt2020-5189-10648@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],
            [
                'position' => 'Treasurer',
                'name' => 'James Fortes',
                'email' => 'james.fortes@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],
            [
                'position' => 'Auditor',
                'name' => 'Antonio Luis M. Lanuza III',
                'email' => 'alml2023-8032-51848@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Paul Angelo D. Antivola',
                'email' => 'pada2022-12912@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Queen Adhel D. Alvarez',
                'email' => 'qada2023-1464-11930@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],
            [
                'position' => 'Representative',
                'name' => 'Gian Carlo L. Morada',
                'email' => 'gclm2022-3794-32893@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],
            [
                'position' => 'Representative',
                'name' => 'Jenalyn Verdeflor',
                'email' => 'jv2022-7322-30049@bicol-u.edu.ph',
                'csc_directory_id' => 13
            ],

            // CSC Directory 14
            [
                'position' => 'President',
                'name' => 'Jake Z. Dacir',
                'email' => 'jzd2022-2292-48160@bicol-u.edu.ph',
                'csc_directory_id' => 14
            ],
            [
                'position' => 'Vice President',
                'name' => 'Lebron James A. Arao',
                'email' => 'ljaa2023-5692-29285@bicol-u.edu.ph',
                'csc_directory_id' => 14
            ],
            [
                'position' => 'Secretary',
                'name' => 'Nicole D. Duran',
                'email' => 'ndd2022-3424-20672@bicol-u.edu.ph',
                'csc_directory_id' => 14
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Danielle G. De Mesa',
                'email' => 'dgd2022-9468-30451@bicol-u.edu.ph',
                'csc_directory_id' => 14
            ],
            [
                'position' => 'Auditor',
                'name' => 'Thomas Josh V. Genova',
                'email' => 'tjvg2023-7902-7214@bicol-u.edu.ph',
                'csc_directory_id' => 14
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Ishi Claire A. Mendones',
                'email' => 'icam2023-8369-68791@bicol-u.edu.ph',
                'csc_directory_id' => 14
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Mark Tristan N. Quiano',
                'email' => 'mtnq2023-1761-30376@bicol-u.edu.ph',
                'csc_directory_id' => 14
            ],
            [
                'position' => 'Representative',
                'name' => 'Justin David V. Reynoso',
                'email' => 'jdvr2023-6700-79946@bicol-u.edu.ph',
                'csc_directory_id' => 14
            ],

            // CSC Directory 15
            [
                'position' => 'President',
                'name' => 'Angelina E. Eva',
                'email' => 'angelinaenaje.eva@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],
            [
                'position' => 'Vice President',
                'name' => 'Rico D. Diolata',
                'email' => 'ricodiche.diolata@bicol-edu.ph', // Note: Typo in the domain (should be 'bicol-u.edu.ph')
                'csc_directory_id' => 15
            ],
            [
                'position' => 'Secretary',
                'name' => 'Maye Celeste F. Ortiz',
                'email' => 'mayecelesteferol.ortiz@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Bea Rica E. Estayan',
                'email' => 'bree2022-6194-44137@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],
            [
                'position' => 'Auditor',
                'name' => 'Jhoanna Joy E. Aquino',
                'email' => 'jjea2023-2112-33802@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Kienlyn Anthonette D. Gorobat',
                'email' => 'kienlynantonettedorado.gorobat@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],
            [
                'position' => 'P.I.O',
                'name' => 'John Earl G. Peralta',
                'email' => 'jegp2023-9662-80447@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],
            [
                'position' => 'Representative',
                'name' => 'Mark D. Estrellado',
                'email' => 'markdimaano.estrellado@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],
            [
                'position' => 'Representative',
                'name' => 'Leiane V. Baloyo',
                'email' => 'leianevergara.baloyo@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],
            [
                'position' => 'Representative',
                'name' => 'James Ryan Luna',
                'email' => 'jrl2023-7201-39274@bicol-u.edu.ph',
                'csc_directory_id' => 15
            ],

            // CSC Directory 16
            [
                'position' => 'President',
                'name' => 'Gwyneth E. Bellen',
                'email' => 'gwynethescarilla.bellen@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'Vice President',
                'name' => 'Quezen V. Nanson',
                'email' => 'quezenvibar.nanson@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'Secretary',
                'name' => 'Maui S. Roberto',
                'email' => 'msr2022-1768-41522@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Jessa Mae C. Millar',
                'email' => 'jmcm2022-4491-95897@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'Auditor',
                'name' => 'Danah Faye O. Nocos',
                'email' => 'dfon2022-3751-95264@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Joana Vanessa C. Cinco',
                'email' => 'jvcc2022-4554-84744@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Leonard A. Foster III',
                'email' => 'laf2023-4234-16239@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'Representative',
                'name' => 'Josie N. Naz',
                'email' => 'jnn2023-4288-30566@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'Representative',
                'name' => 'Honey Grace L. Noleal',
                'email' => 'hgln2023-5429-63780@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],
            [
                'position' => 'Representative',
                'name' => 'Jenessa D. Dionela',
                'email' => 'jdd2022-3831-21873@bicol-u.edu.ph',
                'csc_directory_id' => 16
            ],

            // CSC Directory 17
            [
                'position' => 'President',
                'name' => 'Jhon Rey Salem',
                'email' => 'jres2022-3736-71559@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Vice President',
                'name' => 'Princess Angel Cañutal',
                'email' => 'pac2022-3577-83846@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Secretary',
                'name' => 'Joyce Arevalo',
                'email' => 'jma2022-4350-36463@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Janmark Saguirre',
                'email' => 'jri2022-5540-98003@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Auditor',
                'name' => 'Nico Sayat',
                'email' => 'nicobarbacena.sayat@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Gherlyn Sarturio',
                'email' => 'gts2022-5175-83113@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Aviel Blaise Bueno',
                'email' => 'abdb2023-3291-30240@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'Samantha Joy Alcantara',
                'email' => 'sjsa2023-4525-20701@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'Sharlene Jane Alcantara',
                'email' => 'sjsa2023-6927-48337@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'Mark Joseph Rañada',
                'email' => 'mjfr2023-1098-86604@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'John Paul Imperio',
                'email' => 'sjsa2023-6927-48337@bicol-u.edu.ph', // Note: Duplicate email (same as Sharlene Jane Alcantara)
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'Christian Reondanga',
                'email' => 'christianoloya.reondanga@bicol-u.com.ph', // Note: Typo in the domain (should be 'bicol-u.edu.ph')
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'Ronie Bambe',
                'email' => 'rob2023-5095-60552@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'Faridha De Lima',
                'email' => 'ftd2022-7319-70534@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'Christian Jake Solano',
                'email' => 'cjps2023-9857-34661@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],
            [
                'position' => 'Representative',
                'name' => 'Jecel Martillan',
                'email' => 'jom2022-5121-24683@bicol-u.edu.ph',
                'csc_directory_id' => 17
            ],

            // CSC Directory 18
            [
                'position' => 'President',
                'name' => 'Rodel B. Bataller',
                'email' => 'rodelbrutas.bataller@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Vice President',
                'name' => 'Christian Jess J. Almonte',
                'email' => 'christianjessjose.almonte@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Secretary',
                'name' => 'Raymon Jay Boncacas',
                'email' => 'rjbb2022-7506-65724@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Treasurer',
                'name' => 'Jinky Marollano',
                'email' => 'jinkynuarin.marollano@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Auditor',
                'name' => 'Julianne P. Springael',
                'email' => 'juliannepenero.springael@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Business Manager',
                'name' => 'Ilona Kate B. Blancaflor',
                'email' => 'ikbb2022-6881-16598@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'P.I.O',
                'name' => 'Gilan Francheska B. Borlagdan',
                'email' => 'gfbb2023-6308-17993@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Representative',
                'name' => 'Chrisjon Rupert B. Bongat',
                'email' => 'crbb2023-8313-52290@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Representative',
                'name' => 'Precious Yvette C. Boragay',
                'email' => 'pycb2023-8774-30361@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Representative',
                'name' => 'Marie Kaye B. Miralo',
                'email' => 'mkbm2023-7562-14000@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Representative',
                'name' => 'Ruth S. Bello',
                'email' => 'rsb2023-6020-27836@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ],
            [
                'position' => 'Representative',
                'name' => 'April Bobis',
                'email' => 'ab2023-7404-59116@bicol-u.edu.ph',
                'csc_directory_id' => 18
            ]
        ];

        foreach ($csc_officials as $csc_official) {
            CscOfficial::create($csc_official);
        }
    }
}
