<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pio_users = [
            [
                'name' => 'Kyle Reuben O. Bron',
                'email' => 'krob2022-8625-72115@bicol-u.edu.ph',
            ],
            [
                'name' => 'Hazel Anne B. Marqueses',
                'email' => 'hazelannebanez.marqueses@bicol-u.edu.ph',
            ],
            [
                'name' => 'Trina Chariz Balaguer Hibo',
                'email' => 'trinacharizbalaguer.hibo@bicol-u.edu.ph',
            ],
            [
                'name' => 'Alvin Salle Nario',
                'email' => 'alvinsalle.nario@bicol-u.edu.ph',
            ],
            [
                'name' => 'Jeddy Certifico',
                'email' => 'jeddycolon.certifico@bicol-u.edu.ph',
            ],
            [
                'name' => 'Eljohn Paulo C. Loterte',
                'email' => 'epcl2023-2505-62222@bicol-u.edu.ph',
            ],
        ];

        foreach ($pio_users as $user) {
            $user = User::firstOrCreate($user);
            $user->assignRole('pio');
        }
    }
}
