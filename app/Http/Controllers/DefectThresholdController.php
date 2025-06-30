<?php

namespace App\Http\Controllers;

use App\Models\DefectThreshold;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DefectThresholdController extends Controller 
{
    public function index(Request $request) 
    {
        $thresholds = DefectThreshold::query()->get();

        return Inertia::render('Reports/DefectThreshold', [
            'thresholds' => $thresholds
        ]);
    }
}