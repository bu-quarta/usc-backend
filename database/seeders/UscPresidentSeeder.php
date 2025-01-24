<?php

namespace Database\Seeders;

use App\Models\UscPresidents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UscPresidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usc_presidents = [
            // Chairperson
            [
                'name' => 'ROBERTO SALES',
                'type' => 'Chairperson',
                'college' => 'College of Arts and Sciences',
                'year_range' => '1982-1983',
            ],
            [
                'name' => 'HECTOR TOTO ALCANTARA',
                'type' => 'Chairperson',
                'college' => 'BU College of Engineering',
                'year_range' => '1983-1984',
            ],
            [
                'name' => 'HENRY MONFORTE',
                'type' => 'Chairperson',
                'college' => 'BU College of Arts and Sciences',
                'year_range' => '1984-1985',
            ],
            [
                'name' => 'GERALD ABERIN',
                'type' => 'Chairperson',
                'college' => 'BU College of Engineering',
                'year_range' => '1985-1986',
            ],
            [
                'name' => 'ALBIN NUAL',
                'type' => 'Chairperson',
                'college' => 'BU College of Engineering',
                'year_range' => '1986-1987',
            ],
            [
                'name' => 'LORELIE SAMAR',
                'type' => 'Chairperson',
                'college' => 'BU College of Arts and Sciences',
                'year_range' => '1987-1988',
            ],
            [
                'name' => 'CHRISTOPHER DY-LIACCO FLORES',
                'type' => 'Chairperson',
                'college' => 'BU College of Arts and Sciences',
                'year_range' => '1988-1989',
            ],
            [
                'name' => 'MICHAEL RIÑON',
                'type' => 'Chairperson',
                'college' => 'BU College of Education',
                'year_range' => '1989-1990',
            ],
            [
                'name' => 'ALEXANDER LISTANA',
                'type' => 'Chairperson',
                'college' => 'BU College of Engineering',
                'year_range' => '1990-1991',
            ],
            [
                'name' => 'JEREMY ROMERO A. CRUZ',
                'type' => 'Chairperson',
                'college' => 'BU College of Education',
                'year_range' => '1991-1992',
            ],
            [
                'name' => 'PERRY PARADO CAMBA',
                'type' => 'Chairperson',
                'college' => 'BU College of Education',
                'year_range' => '1992-1993',
            ],
            [
                'name' => 'CHARLIE DIMATULAC',
                'type' => 'Chairperson',
                'college' => 'BU College of Arts and Sciences',
                'year_range' => '1993-1994',
            ],
            [
                'name' => 'DARWIN MURILLO',
                'type' => 'Chairperson',
                'college' => 'BU College of Engineering',
                'year_range' => '1994-1995',
            ],
            [
                'name' => 'ROMEL SUMIDO',
                'type' => 'Chairperson',
                'college' => 'BU College of Engineering',
                'year_range' => '1995-1996',
            ],
            [
                'name' => 'FREDERICK DIAZ',
                'type' => 'Chairperson',
                'college' => 'BU College of Engineering',
                'year_range' => '1996-1997',
            ],

            // Chairperson and Student Regent
            [
                'name' => 'CARLO BONGALON',
                'type' => 'Chairperson and Student Regent',
                'college' => 'College of Engineering',
                'year_range' => '1997-1998',
            ],
            [
                'name' => 'RHONDON RICAFORT',
                'type' => 'Chairperson and Student Regent',
                'college' => 'College of Education',
                'year_range' => '1998-1999',
            ],
            [
                'name' => 'GARRY LUNAS',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '1999-2000',
            ],
            [
                'name' => 'FLODEL OROSCO',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Arts and Sciences',
                'year_range' => '2000-2001',
            ],
            [
                'name' => 'ERNAND BRIOBO',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2001-2002',
            ],
            [
                'name' => 'EDDIE BALUNSO',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Arts and Sciences',
                'year_range' => '2002-2003',
            ],
            [
                'name' => 'PARLE BARON',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2003-2004',
            ],
            [
                'name' => 'BENIGNO AUSTERO',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Arts and Sciences',
                'year_range' => '2004-2005',
            ],
            [
                'name' => 'EXPEDITO LOBETANIA JR.',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Education',
                'year_range' => '2005-2006',
            ],
            [
                'name' => 'MICHAEL MALANO',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2006-2008',
            ],
            [
                'name' => 'EDIZON DIVINAFLOR',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2008-2009',
            ],
            [
                'name' => 'JESSICA BIASCA',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2009-2010',
            ],
            [
                'name' => 'MARIA DAISY LLENO',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Social Sciences and Philosophy',
                'year_range' => '2010-2011',
            ],
            [
                'name' => 'RUTHER FLORES',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Education',
                'year_range' => '2011-2012',
            ],
            [
                'name' => 'RACHELLE ANN L. MIRANDA',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Education',
                'year_range' => '2012-2013',
            ],
            [
                'name' => 'MARK HARRIS LIM',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Arts and Letters',
                'year_range' => '2013-2014',
            ],
            [
                'name' => 'ADELAINE BAUTISTA',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Arts and Letters',
                'year_range' => '2014-2015',
            ],
            [
                'name' => 'IRENE KAYLE SANTILLAN',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Social Sciences and Philosophy',
                'year_range' => '2015-2016',
            ],
            [
                'name' => 'PATRICK ANTHONY R. NOTA',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2016-2017',
            ],
            [
                'name' => 'EARL VINCENT H. VISTA',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Education',
                'year_range' => '2017-2018',
            ],
            [
                'name' => 'Brian Mitchel De La Rama',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2018-2019',
            ],
            [
                'name' => 'IVAN IAN BARIA',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2019-2020',
            ],
            [
                'name' => 'VINCE JOSEPH VIBAR',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Social Sciences and Philosophy',
                'year_range' => '2020-2021',
            ],
            [
                'name' => 'MARC LOUIE ALER',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Nursing',
                'year_range' => '2021-2022',
            ],
            [
                'name' => 'ASHER JADE T. AZUL',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Engineering',
                'year_range' => '2022-2023',
            ],
            [
                'name' => 'REMEE ESTEFANY P. BALDORADO',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Social Sciences and Philosophy',
                'year_range' => '2023-2024',
            ],
            [
                'name' => 'STACY DANIEL V. ALAMARES',
                'type' => 'Chairperson and Student Regent',
                'college' => 'BU College of Arts and Letters',
                'year_range' => '2024-2025',
            ],
        ];

        foreach ($usc_presidents as $usc_president) {
            UscPresidents::create($usc_president);
        }
    }
}
