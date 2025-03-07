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
            ["name" => "Azul, Camillea", "type" => "Student Regent Commissioners"],
            ["name" => "Balasta, Erl Lawrence Dominic", "type" => "Student Regent Commissioners"],
            ["name" => "Bocito, Chester Louis Joaquin", "type" => "Student Regent Commissioners"],
            ["name" => "De Vera, Jorene Jason", "type" => "Student Regent Commissioners"],
            ["name" => "Lapida, Revis", "type" => "Student Regent Commissioners"],
            ["name" => "Malagueno, Nam", "type" => "Student Regent Commissioners"],
            ["name" => "Manuel, James Emmanuel", "type" => "Student Regent Commissioners"],
            ["name" => "Monsalve, Richely", "type" => "Student Regent Commissioners"],
            ["name" => "Montesor, Alexzandra Mae", "type" => "Student Regent Commissioners"],
            ["name" => "Ortiz, Desiree Ann", "type" => "Student Regent Commissioners"],
            ["name" => "Tuscano, JR", "type" => "Student Regent Commissioners"],
            ["name" => "Bonaobra, Wilfredo", "type" => "Student Regent Commissioners"],
            ["name" => "Castillo, Mark Robert", "type" => "Student Regent Commissioners"],
            ["name" => "Magdaong, Jonie", "type" => "Student Regent Commissioners"],
            // Internal Affairs Committee
            ["name" => "Colar, Justine", "type" => "Internal Affairs Committee"],
            ["name" => "Encisa, Jobert King", "type" => "Internal Affairs Committee"],
            ["name" => "Loria, Joshua", "type" => "Internal Affairs Committee"],
            ["name" => "Loterte, Eljohn Paulo", "type" => "Internal Affairs Committee"],
            ["name" => "Malapit, Christopher Miranda Jr.", "type" => "Internal Affairs Committee"],
            ["name" => "Margelino, Kristina Marie", "type" => "Internal Affairs Committee"],
            ["name" => "Martinez, Jane Claire", "type" => "Internal Affairs Committee"],
            ["name" => "Barba, Marc Glenn", "type" => "Internal Affairs Committee"],
            ["name" => "Montallana, Diviene", "type" => "Internal Affairs Committee"],
            ["name" => "Vista, Jhuvie", "type" => "Internal Affairs Committee"],
            // Secretariat Committee
            ["name" => "Arevalo, Yorey Ann", "type" => "Secretariat Committee"],
            ["name" => "Llosala, Joana Marie", "type" => "Secretariat Committee"],
            ["name" => "Seva, Hazel Areej", "type" => "Secretariat Committee"],
            ["name" => "Aguilar, Maria Andrea", "type" => "Secretariat Committee"],
            ["name" => "Gascon, Axzyl Arneil", "type" => "Secretariat Committee"],
            ["name" => "Velasco, Aleja Joyce", "type" => "Secretariat Committee"],
            // Finance Committee 
            ["name" => "Alcantara, Shane", "type" => "Finance Committee"],
            ["name" => "Briñas, John Patrick", "type" => "Finance Committee"],
            ["name" => "Casais, Alex Jr.", "type" => "Finance Committee"],
            ["name" => "Estandian, Reina", "type" => "Finance Committee"],
            ["name" => "Medina, Julianne Vernice", "type" => "Finance Committee"],
            ["name" => "Nepomuceno, Chan Jr.", "type" => "Finance Committee"],
            ["name" => "Pajarillo, Lyra", "type" => "Finance Committee"],
            ["name" => "Ramirez, Sol", "type" => "Finance Committee"],
            ["name" => "Balilo, Ma. Fatima Faye B.", "type" => "Finance Committee"],
            ["name" => "Balonzo, Johanna Mari C.", "type" => "Finance Committee"],
            ["name" => "Constantino, Lorie", "type" => "Finance Committee"],
            // Audit Committee
            ["name" => "Cas, Giovanni", "type" => "Audit Committee"],
            ["name" => "Corpuz, Christine Anne", "type" => "Audit Committee"],
            ["name" => "Destajo, Dave Justine", "type" => "Audit Committee"],
            ["name" => "Landong, Franc", "type" => "Audit Committee"],
            ["name" => "Llana, Adrian Marc", "type" => "Audit Committee"],
            ["name" => "Lopera, Jonel", "type" => "Audit Committee"],
            ["name" => "Ricario, Ymelee", "type" => "Audit Committee"],
            ["name" => "Yanson, Rochiel Grace", "type" => "Audit Committee"],
            ["name" => "Dilao, Maricon", "type" => "Audit Committee"],
            ["name" => "Niebres, Gwyneth Nicole", "type" => "Audit Committee"],
            // Ways and Means Committee
            ["name" => "Alsaga, Michaila", "type" => "Ways and Means Committee"],
            ["name" => "Ante, Raynor", "type" => "Ways and Means Committee"],
            ["name" => "Berjuega, Aaron", "type" => "Ways and Means Committee"],
            ["name" => "Dabac, Arvin Cris", "type" => "Ways and Means Committee"],
            ["name" => "Gabito, Patrick", "type" => "Ways and Means Committee"],
            ["name" => "Gados, Jan Joshua", "type" => "Ways and Means Committee"],
            ["name" => "Losanez, Ghenly", "type" => "Ways and Means Committee"],
            ["name" => "Mandane, Rachelle Ann", "type" => "Ways and Means Committee"],
            ["name" => "Obina, Kim Laurence P.", "type" => "Ways and Means Committee"],
            ["name" => "Yonzon, Kirsten Cyra S.", "type" => "Ways and Means Committee"],
            ["name" => "Manayon, Geovanni Jr. A.", "type" => "Ways and Means Committee"],
            ["name" => "Zurbano, Marc Stephen V.", "type" => "Ways and Means Committee"],
            ["name" => "Porcalla, Veejay", "type" => "Ways and Means Committee"],
            // Content Creation Sub-Committee
            ["name" => "Ante, Audie Jay", "type" => "Content Creation Sub-Committee"],
            ["name" => "Ariola, Carla Isabel", "type" => "Content Creation Sub-Committee"],
            ["name" => "Bos, Marianne Joice", "type" => "Content Creation Sub-Committee"],
            ["name" => "Burce, Shane Mae", "type" => "Content Creation Sub-Committee"],
            ["name" => "Cadag, Venice", "type" => "Content Creation Sub-Committee"],
            ["name" => "Macandog, Julius Salvador", "type" => "Content Creation Sub-Committee"],
            ["name" => "Merced, Stephen Frank", "type" => "Content Creation Sub-Committee"],
            ["name" => "Morales, Haven Kerbie", "type" => "Content Creation Sub-Committee"],
            ["name" => "Ranera, Mary Lourdse", "type" => "Content Creation Sub-Committee"],
            ["name" => "Magdaraog, Mark Felix", "type" => "Content Creation Sub-Committee"],
            ["name" => "Millena, Joy Ann", "type" => "Content Creation Sub-Committee"],
            ["name" => "Pajara, Rogielyn", "type" => "Content Creation Sub-Committee"],
            // Social Media Management Sub-Committee
            ["name" => "Madriñan, Yunise Ellaine", "type" => "Social Media Management Sub-Committee"],
            ["name" => "Dote, Mark Orly", "type" => "Social Media Management Sub-Committee"],
            ["name" => "Berjuega, Aaron Bernette", "type" => "Social Media Management Sub-Committee"],
            // Event Documentation Sub-Committee
            ["name" => "Berjuela, John Vincent", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Betudio, Jethro Yñigo", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Bien, Francis John Maric", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Cruz Sophia Mae", "type" => "Event Documentation Sub-Committee"],
            ["name" => "De Padua, Julius Caesar", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Escueta, Jan Andre", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Jimenez, Elny Jeam", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Lanzuela, Jovelyn", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Lita, Vincent", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Marantal, Darlene Angel", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Moratillo, Jullian Laurence", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Soncuya, Franchezka", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Villamor, Jeyzeth Euriel", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Recepcion, Alyssandra", "type" => "Event Documentation Sub-Committee"],
            ["name" => "Zuniega, Maria Angel", "type" => "Event Documentation Sub-Committee"],
            // Visual Content and Graphic Design Sub-Committee
            ["name" => "Avila, Mary Ylaine Joy", "type" => "Visual Content and Graphic Design Sub-Committee"],
            ["name" => "Buasan, Audrey Maxene", "type" => "Visual Content and Graphic Design Sub-Committee"],
            ["name" => "Escandor, Paul Darryl", "type" => "Visual Content and Graphic Design Sub-Committee"],
            ["name" => "Fresnido, Russel", "type" => "Visual Content and Graphic Design Sub-Committee"],
            ["name" => "Gime, Allysa", "type" => "Visual Content and Graphic Design Sub-Committee"],
            ["name" => "Razon, Gelou Robert", "type" => "Visual Content and Graphic Design Sub-Committee"],
            ["name" => "Valladolid, Miles Owen", "type" => "Visual Content and Graphic Design Sub-Committee"],
            // Technical Sub-Committee
            ["name" => "Cuario, John Lloyd", "type" => "Technical Sub-Committee"],
            ["name" => "Echin, Vince", "type" => "Technical Sub-Committee"],
            ["name" => "Habalo, Kristine", "type" => "Technical Sub-Committee"],
            ["name" => "Jarme, Jehann Rose", "type" => "Technical Sub-Committee"],
            ["name" => "Llaguno, Carl Justine", "type" => "Technical Sub-Committee"],
            ["name" => "Lorica, Cesphillip", "type" => "Technical Sub-Committee"],
            ["name" => "Mendez, Julia Mae", "type" => "Technical Sub-Committee"],
        ];

        foreach ($usc_councilors as $usc_councilor) {
            UscCouncilor::create($usc_councilor);
        }
    }
}
