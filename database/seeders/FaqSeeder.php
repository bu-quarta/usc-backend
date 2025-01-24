<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is the role of the University Student Council (USC)?',
                'answer' => 'The USC is the highest student-governing body in the university, advocating for student rights and welfare while organizing activities that foster leadership and engagement among students.'
            ],
            [
                'question' => 'Who can run for a position in the USC?',
                'answer' => 'Any bona fide Bicol University student who meets the qualifications stated in the university’s election code and policies can run for a USC position.'
            ],
            [
                'question' => 'How are members of the USC elected?',
                'answer' => 'The members are elected annually through a university-wide democratic election process facilitated by the Office of Student Affairs and Services (OSAS).'
            ],
            [
                'question' => 'Are the positions of Chairperson and Student Regent similar or distinct?',
                'answer' => 'The roles of Chairperson and Student Regent, though held by the same elected person, are distinct. As Chairperson, they lead the USC as its chief executive officer. Meanwhile, as Student Regent, they sit on the Board of Regents—the university\'s highest decision-making body—as the sole representative of the student sector.'
            ],
            [
                'question' => 'How can I voice my concerns or suggestions to the USC?',
                'answer' => 'You can contact your college’s student council representative or directly communicate with the USC through their office, email, or official social media accounts.'
            ],
            [
                'question' => 'What is the General Legislative Council (GLC)?',
                'answer' => 'The GLC is the legislative arm of the USC that discusses and approves legislative measures to address student concerns and initiatives.'
            ],
            [
                'question' => 'Does the USC have financial transparency?',
                'answer' => 'The USC, through this website, commits to the regular publication of financial reports, including details on allocated budgets and expenditures, to maintain accountability.'
            ],
            [
                'question' => 'What programs does the USC organize for students?',
                'answer' => 'The USC organizes events such as leadership training, advocacy campaigns, cultural programs, and student forums.'
            ],
            [
                'question' => 'How can I volunteer or join USC committees?',
                'answer' => 'The USC opens calls for volunteers and committee memberships through announcements on its official platforms.'
            ],
            [
                'question' => 'Where can I find announcements and updates from the USC?',
                'answer' => 'You can stay updated through the USC’s official website, social media pages, and campus bulletin boards.'
            ],
            [
                'question' => 'What can I find on the USC website?',
                'answer' => 'The website includes information on the elected USC officers, its projects, announcements, events, council reports, and other advocacy and relevant updates.'
            ],
            [
                'question' => 'How do I contact the USC officers through the website?',
                'answer' => 'View the Council directory to find the email addresses and social media accounts of USC officers.'
            ],
            [
                'question' => 'How do I access announcements on the website?',
                'answer' => 'Announcements are prominently displayed on the homepage and in the “News and Updates” section of the website.'
            ],
            [
                'question' => 'Can I file complaints or suggestions through the website?',
                'answer' => 'Yes, the website has a dedicated “Contact Us” page where you can submit your concerns and suggestions through email.'
            ],
            [
                'question' => 'Is the USC website mobile-friendly?',
                'answer' => 'Yes, the website is designed to be responsive and accessible across devices, including smartphones and tablets.'
            ],
            [
                'question' => 'How do I download official USC forms or files?',
                'answer' => 'Visit the “Reports” section of the website, where you can access and download necessary documents.'
            ],
            [
                'question' => 'Are financial reports available on the website?',
                'answer' => 'Yes, the “Reports” section contains downloadable financial reports for the current fiscal year.'
            ],
            [
                'question' => 'What if I encounter technical issues on the website?',
                'answer' => 'You can report website-related problems through the Council\'s official email or its social media platforms.'
            ],
            [
                'question' => 'How do I find information about upcoming USC events?',
                'answer' => 'You can check the “USC Events” section of the website, which lists all upcoming activities and important dates.'
            ],
            [
                'question' => 'How often is the USC website updated?',
                'answer' => 'The website is updated regularly to ensure students have access to the latest information and announcements.'
            ]
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
