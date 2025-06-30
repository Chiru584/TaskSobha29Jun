<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\SubActivity;

class ActivitySeeder extends Seeder 
{
    public function run(): void 
    {
        $activity = Activity::create([
            'name' => 'Site Preparation',
            'description' => 'Lorem Ipsum Lorem Ipsum',
        ]);

        SubActivity::insert([
            [
                'activity_id' => $activity->id,
                'name' => 'Clearing and Grading',
                'description' => 'Lorem Ipsum Lorem Ipsum',
                'inspection_required_count' => 45,
                'date' => '2023-11-18 23:00:00',
            ],
            [
                'activity_id' => $activity->id,
                'name' => 'Clearing and Grading',
                'description' => 'Lorem Ipsum Lorem Ipsum',
                'inspection_required_count' => 45,
                'date' => '2023-11-18 23:00:00',
            ],
        ]);

        foreach (['Foundation Construction', 'Framing'] as $name) {
            Activity::create([
                'name' => $name,
                'description' => 'Lorem Ipsum Lorem Ipsum',
            ]);
        }
    }
}