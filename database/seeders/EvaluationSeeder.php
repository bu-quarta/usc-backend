<?php

namespace Database\Seeders;

use App\Models\Evaluation;
use App\Models\EventPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = EventPost::all();

        foreach ($events as $event) {
            Evaluation::create([
                'event_post_id' => $event->id,
            ]);
        }
    }
}
