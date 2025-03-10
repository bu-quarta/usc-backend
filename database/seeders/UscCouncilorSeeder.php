<?php

namespace Database\Seeders;

use App\Models\UscCouncilor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UscCouncilorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usc_councilors = [
            // Student Regent Commissioners
            ["name" => "ALEXZANDRA MAE MONTESOR", "type" => "Student Regent Commissioners", "college" => "College of Science"],
            ["name" => "CAMILLEA AZUL", "type" => "Student Regent Commissioners", "college" => "College of Science"],
            ["name" => "CHESTER LOUIS JOAQUIN BOCITO", "type" => "Student Regent Commissioners", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "DESIREE ANN ORTIZ", "type" => "Student Regent Commissioners", "college" => "College of Education"],
            ["name" => "ERL LAWRENCE DOMINIC BALASTA", "type" => "Student Regent Commissioners", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "JAMES EMMANUEL MANUEL", "type" => "Student Regent Commissioners", "college" => "College of Nursing"],
            ["name" => "JONIE MAGDAONG", "type" => "Student Regent Commissioners", "college" => "College of Education"],
            ["name" => "JORENE JASON DE VERA", "type" => "Student Regent Commissioners", "college" => "BU Guinobatan"],
            ["name" => "JR TUSCANO", "type" => "Student Regent Commissioners", "college" => "College of Education"],
            ["name" => "MARK JESS ONGONION", "type" => "Student Regent Commissioners", "college" => "College of Engineering"],
            ["name" => "MARK ROBERT CASTILLO", "type" => "Student Regent Commissioners", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "NAM MALAGUENO", "type" => "Student Regent Commissioners", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "REVIS LAPIDA", "type" => "Student Regent Commissioners", "college" => "College of Arts and Letters"],
            ["name" => "RICHELY MONSALVE", "type" => "Student Regent Commissioners", "college" => "College of Education"],
            ["name" => "WILFREDO BONAOBRA", "type" => "Student Regent Commissioners", "college" => "BU Tabaco"],

            // Internal Affairs Committee
            ["name" => "CHRISTOPHER MIRANDA JR. MALAPIT", "type" => "Internal Affairs Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "DIVIENE MONTALLANA", "type" => "Internal Affairs Committee", "college" => "Jesse M. Robredo Institute of Governance and Development"],
            ["name" => "ELJOHN PAULO LOTERTE", "type" => "Internal Affairs Committee", "college" => "College of Science"],
            ["name" => "JANE CLAIRE MARTINEZ", "type" => "Internal Affairs Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "JHUVIE VISTA", "type" => "Internal Affairs Committee", "college" => "Jesse M. Robredo Institute of Governance and Development"],
            ["name" => "JOBERT KING ENCISA", "type" => "Internal Affairs Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "JOSHUA LORIA", "type" => "Internal Affairs Committee", "college" => "Jesse M. Robredo Institute of Governance and Development"],
            ["name" => "JUSTINE COLAR", "type" => "Internal Affairs Committee", "college" => "Institute of Design and Architecture"],
            ["name" => "KRISTINA MARIE MARGELINO", "type" => "Internal Affairs Committee", "college" => "College of Science"],
            ["name" => "MARC GLENN BARBA", "type" => "Internal Affairs Committee", "college" => "College of Business, Economics, and Management"],

            // External Affairs Committee
            ["name" => "ALEXA KURT MIRANDILLA", "type" => "External Affairs Committee", "college" => "Institute of Physical Education, Sports, and Recreation"],
            ["name" => "BIANCE JOIE SABERON", "type" => "External Affairs Committee", "college" => "College of Arts and Letters"],
            ["name" => "CINDY MIRAFUENTES", "type" => "External Affairs Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "DIO BRANDON VITERBO", "type" => "External Affairs Committee", "college" => "College of Nursing"],
            ["name" => "HAROLD MALLORCA", "type" => "External Affairs Committee", "college" => "College of Engineering"],
            ["name" => "JAY GUIANAN", "type" => "External Affairs Committee", "college" => "College of Arts and Letters"],
            ["name" => "JHANA LORAINE RAQUID", "type" => "External Affairs Committee", "college" => "BU Polangui"],
            ["name" => "JONATHAN PELON", "type" => "External Affairs Committee", "college" => "College of Science"],
            ["name" => "JOYCE SECRETARIO BONTILE", "type" => "External Affairs Committee", "college" => "College of Arts and Letters"],
            ["name" => "LEO JOSHUA APIN", "type" => "External Affairs Committee", "college" => "College of Arts and Letters"],
            ["name" => "MERELINE SUSA", "type" => "External Affairs Committee", "college" => "College of Arts and Letters"],
            ["name" => "MICHAEL JOSHUA ARANQUEZ", "type" => "External Affairs Committee", "college" => "College of Science"],
            ["name" => "NICK VINCENT CONDA", "type" => "External Affairs Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "ROB LESTER VALLADOLID", "type" => "External Affairs Committee", "college" => "College of Industrial Technology"],
            ["name" => "RONALDO JR. ATUTUBO", "type" => "External Affairs Committee", "college" => "Institute of Physical Education, Sports, and Recreation"],

            // Secretariat Committee
            ["name" => "ALEJA JOYCE VELASCO", "type" => "Secretariat Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "AXZYL ARNEIL GASCON", "type" => "Secretariat Committee", "college" => "College of Nursing"],
            ["name" => "HAZEL AREEJ SEVA", "type" => "Secretariat Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "JOANA MARIE LLOSALA", "type" => "Secretariat Committee", "college" => "College of Industrial Technology"],
            ["name" => "MARIA ANDREA AGUILAR", "type" => "Secretariat Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "YOREY ANN AREVALO", "type" => "Secretariat Committee", "college" => "College of Education"],

            // Finance Committee
            ["name" => "ALEX JR. CASAIS", "type" => "Finance Committee", "college" => "College of Engineering"],
            ["name" => "CHAN JR. NEPOMUCENO", "type" => "Finance Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "JOHANNA MARI C. BALONZO", "type" => "Finance Committee", "college" => "College of Engineering"],
            ["name" => "JOHN PATRICK BRIÑAS", "type" => "Finance Committee", "college" => "College of Engineering"],
            ["name" => "JULIANNE VERNICE MEDINA", "type" => "Finance Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "LORIE CONSTANTINO", "type" => "Finance Committee", "college" => "College of Education"],
            ["name" => "LYRA PAJARILLO", "type" => "Finance Committee", "college" => "College of Engineering"],
            ["name" => "MA. FATIMA FAYE B. BALILO", "type" => "Finance Committee", "college" => "College of Engineering"],
            ["name" => "REINA ESTANDIAN", "type" => "Finance Committee", "college" => "College of Engineering"],
            ["name" => "SHANE ALCANTARA", "type" => "Finance Committee", "college" => "College of Engineering"],
            ["name" => "SOL RAMIREZ", "type" => "Finance Committee", "college" => "College of Engineering"],

            // Audit Committee
            ["name" => "ADRIAN MARC LLANA", "type" => "Audit Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "CHRISTINE ANNE CORPUZ", "type" => "Audit Committee", "college" => "College of Education"],
            ["name" => "DAVE JUSTINE DESTAJO", "type" => "Audit Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "FRANC LANDONG", "type" => "Audit Committee", "college" => "Institute of Design and Architecture"],
            ["name" => "GIOVANNI CAS", "type" => "Audit Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "GWYNETH NICOLE NIEBRES", "type" => "Audit Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "MARICON DILAO", "type" => "Audit Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "ROCHIEL GRACE YANSON", "type" => "Audit Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "YMELEE RICARIO", "type" => "Audit Committee", "college" => "College of Business, Economics, and Management"],

            // Ways and Means Committee
            ["name" => "ARVIN CRIS DABAC", "type" => "Ways and Means Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "GEOVANNI JR. A. MANAYON", "type" => "Ways and Means Committee", "college" => "College of Industrial Technology"],
            ["name" => "GHENLY LOSANEZ", "type" => "Ways and Means Committee", "college" => "College of Industrial Technology"],
            ["name" => "JAN JOSHUA GADOS", "type" => "Ways and Means Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "KIM LAURENCE P. OBINA", "type" => "Ways and Means Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "KIRSTEN CYRA S. YONZON", "type" => "Ways and Means Committee", "college" => "College of Education"],
            ["name" => "MARC STEPHEN V. ZURBANO", "type" => "Ways and Means Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "MICHAILA ALSAGA", "type" => "Ways and Means Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "PATRICK GABITO", "type" => "Ways and Means Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "RACHELLE ANN MANDANE", "type" => "Ways and Means Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "RAYNOR ANTE", "type" => "Ways and Means Committee", "college" => "College of Engineering"],
            ["name" => "VEEJAY PORCALLA", "type" => "Ways and Means Committee", "college" => "College of Business, Economics, and Management"],

            // Public Relations Committee - Content Creation Sub-Committee
            ["name" => "AUDIE JAY ANTE", "type" => "Content Creation Sub-Committee", "college" => "College of Education"],
            ["name" => "CARLA ISABEL ARIOLA", "type" => "Content Creation Sub-Committee", "college" => "College of Education"],
            ["name" => "HAVEN KERBIE MORALES", "type" => "Content Creation Sub-Committee", "college" => "College of Arts and Letters"],
            ["name" => "JOY ANN MILLENA", "type" => "Content Creation Sub-Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "JULIUS SALVADOR MACANDOG", "type" => "Content Creation Sub-Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "MARIANNE JOICE BOS", "type" => "Content Creation Sub-Committee", "college" => "Institute of Design and Architecture"],
            ["name" => "MARK FELIX MAGDARAOG", "type" => "Content Creation Sub-Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "MARY LOURDES RANERA", "type" => "Content Creation Sub-Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "ROGIELYN PAJARA", "type" => "Content Creation Sub-Committee", "college" => "College of Engineering"],
            ["name" => "SHANE MAE BURCE", "type" => "Content Creation Sub-Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "STEPHEN FRANK MERCED", "type" => "Content Creation Sub-Committee", "college" => "College of Arts and Letters"],
            ["name" => "VENICE CADAG", "type" => "Content Creation Sub-Committee", "college" => "Jesse M. Robredo Institute of Governance and Development"],

            // Public Relations Committee - Social Media Management Sub-Committee
            ["name" => "AARON BERNETTE BERJUEGA", "type" => "Social Media Management Sub-Committee", "college" => "College of Arts and Letters"],
            ["name" => "MARK ORLY DOTE", "type" => "Social Media Management Sub-Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "YUNISE ELLAINE MADRIÑAN", "type" => "Social Media Management Sub-Committee", "college" => "College of Science"],

            // Public Relations Committee - Visual Content and Graphic Design Sub-Committee
            ["name" => "ALLYSA GIME", "type" => "Visual Content and Graphic Design Sub-Committee", "college" => "College of Arts and Letters"],
            ["name" => "AUDREY MAXENE BUASAN", "type" => "Visual Content and Graphic Design Sub-Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "GELOU ROBERT RAZON", "type" => "Visual Content and Graphic Design Sub-Committee", "college" => "BU Polangui"],
            ["name" => "MARY YLAINE JOY AVILA", "type" => "Visual Content and Graphic Design Sub-Committee", "college" => "BU Tabaco"],
            ["name" => "MILES OWEN VALLADOLID", "type" => "Visual Content and Graphic Design Sub-Committee", "college" => "College of Nursing"],
            ["name" => "PAUL DARRYL ESCANDOR", "type" => "Visual Content and Graphic Design Sub-Committee", "college" => "College of Industrial Technology"],
            ["name" => "RUSSEL FRESNIDO", "type" => "Visual Content and Graphic Design Sub-Committee", "college" => "College of Education"],

            // Public Relations Committee - Event Documentation Sub-Committee
            ["name" => "ALYSSANDRA RECEPCION", "type" => "Event Documentation Sub-Committee", "college" => "College of Nursing"],
            ["name" => "DARLENE ANGEL MARANTAL", "type" => "Event Documentation Sub-Committee", "college" => "College of Social Sciences and Philosophy"],
            ["name" => "ELNY JEAM JIMENEZ", "type" => "Event Documentation Sub-Committee", "college" => "College of Arts and Letters"],
            ["name" => "FRANCHEZKA SONCUYA", "type" => "Event Documentation Sub-Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "FRANCIS JOHN MARIC BIEN", "type" => "Event Documentation Sub-Committee", "college" => "Institute of Design and Architecture"],

            // Event Documentation Sub-Committee
            ["name" => "JAN ANDRE ESCUETA", "type" => "Event Documentation Sub-Committee", "college" => "College of Dental Medicine"],
            ["name" => "JETHRO YÑIGO BETUDIO", "type" => "Event Documentation Sub-Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "JEYZETH EURIEL VILLAMOR", "type" => "Event Documentation Sub-Committee", "college" => "Jesse M. Robredo Institute of Governance and Development"],
            ["name" => "JOHN VINCENT BERJUELA", "type" => "Event Documentation Sub-Committee", "college" => "BU Polangui"],
            ["name" => "JOVELYN LANZUELA", "type" => "Event Documentation Sub-Committee", "college" => "College of Arts and Letters"],
            ["name" => "JULIUS CAESAR DE PADUA", "type" => "Event Documentation Sub-Committee", "college" => "College of Dental Medicine"],
            ["name" => "JULLIAN LAURENCE MORATILLO", "type" => "Event Documentation Sub-Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "SOPHIA MAE CRUZ", "type" => "Event Documentation Sub-Committee", "college" => "College of Arts and Letters"],
            ["name" => "VINCENT LITA", "type" => "Event Documentation Sub-Committee", "college" => "Institute of Design and Architecture"],
            ["name" => "MARIA ANGEL ZUNIEGA", "type" => "Event Documentation Sub-Committee", "college" => "BU Polangui"],

            // Technical Production Sub-Committee
            ["name" => "CARL JUSTINE LLAGUNO", "type" => "Technical Production Sub-Committee", "college" => "College of Industrial Technology"],
            ["name" => "CESPHILLIP LORICA", "type" => "Technical Production Sub-Committee", "college" => "College of Science"],
            ["name" => "JEHANN ROSE JARME", "type" => "Technical Production Sub-Committee", "college" => "College of Business, Economics, and Management"],
            ["name" => "JOHN LLOYD CUARIO", "type" => "Technical Production Sub-Committee", "college" => "College of Science"],
            ["name" => "JULIA MAE MENDEZ", "type" => "Technical Production Sub-Committee", "college" => "College of Education"],
            ["name" => "KRISTINE HABALO", "type" => "Technical Production Sub-Committee", "college" => "College of Education"],
            ["name" => "VINCE ECHIN", "type" => "Technical Production Sub-Committee", "college" => "College of Arts and Letters"],
        ];


        foreach ($usc_councilors as $usc_councilor) {
            UscCouncilor::create($usc_councilor);
        }
    }
}
