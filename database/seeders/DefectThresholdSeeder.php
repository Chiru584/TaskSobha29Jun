<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DefectThreshold;

class DefectThresholdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DefectThreshold::insert([
            [
                'defect_type' => 'UCM Leak',
                'defect_threshold' => 60,
                'sporadic_threshold' => 5,
                'chronic_threshold' => 20,
                'severity_index' => 4,
                'control_index' => 8,
            ],
            [
                'defect_type' => 'Glass Bend',
                'defect_threshold' => 70,
                'sporadic_threshold' => 3,
                'chronic_threshold' => 15,
                'severity_index' => 6,
                'control_index' => 3,
            ],
            [
                'defect_type' => 'Wire not connected',
                'defect_threshold' => 100,
                'sporadic_threshold' => 5,
                'chronic_threshold' => 10,
                'severity_index' => 8,
                'control_index' => 8,
            ],
            [
                'defect_type' => 'FCD connection issue',
                'defect_threshold' => 200,
                'sporadic_threshold' => 5,
                'chronic_threshold' => 5,
                'severity_index' => 5,
                'control_index' => 4,
            ],
            [
                'defect_type' => 'Access not provided for FCU',
                'defect_threshold' => 50,
                'sporadic_threshold' => 8,
                'chronic_threshold' => 55,
                'severity_index' => 4,
                'control_index' => 8,
            ],
            [
                'defect_type' => 'Screw missing',
                'defect_threshold' => 30,
                'sporadic_threshold' => 2,
                'chronic_threshold' => 32,
                'severity_index' => 2,
                'control_index' => 1,
            ],
        ]);
    }
}
