<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DefectReport;

class DefectReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DefectReport::insert([
            [
                'sou' => 'SOU 3',
                'project' => 'Sobha Seahaven',
                'division' => 'Finishing Division',
                'sub_division' => 'Paint',
                'activity' => 'Dry Area Floor',
                'sub_activity' => 'Floor Tiling',
                'defect_type' => 'UCM Leak',
                'defect_threshold' => 200,
                'yearly_count' => 80,
            ],
            [
                'sou' => 'SOU 1',
                'project' => 'Sobha Seahaven',
                'division' => 'Finishing Division',
                'sub_division' => 'Tile Division',
                'activity' => 'Dry Area Floor',
                'sub_activity' => 'Ceiling First coat',
                'defect_type' => 'Glass Bend',
                'defect_threshold' => 60,
                'yearly_count' => 40,
            ],
            [
                'sou' => 'SOU 1',
                'project' => 'The Creast',
                'division' => 'Finishing Division',
                'sub_division' => 'Paint',
                'activity' => 'Dry Area Floor',
                'sub_activity' => 'Floor Tiling',
                'defect_type' => 'UCM Leak',
                'defect_threshold' => 200,
                'yearly_count' => 20,
            ],
            [
                'sou' => 'SOU 2',
                'project' => 'Sobha Heartland II',
                'division' => 'MEP Division',
                'sub_division' => 'Plumbing',
                'activity' => 'GI Box Fixing',
                'sub_activity' => 'GI Box Fixing',
                'defect_type' => 'Screw Missing',
                'defect_threshold' => 80,
                'yearly_count' => 50,
            ],
            [
                'sou' => 'SOU 2',
                'project' => 'Sobha Seahaven',
                'division' => 'Tile Division',
                'sub_division' => 'Paint',
                'activity' => 'MS Bracket Fixing',
                'sub_activity' => 'MS Bracket Fixing',
                'defect_type' => 'Srew Missing',
                'defect_threshold' => 100,
                'yearly_count' => 30,
            ],
        ]);
    }
}
