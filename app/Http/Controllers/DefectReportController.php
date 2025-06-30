<?php

namespace App\Http\Controllers;

use App\Models\DefectReport;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DefectReportController extends Controller 
{

    public function index(Request $request) 
    {
        $reports = DefectReport::query()
            ->when($request->project, fn($q) => $q->where('project', $request->project))
            ->when($request->division, fn($q) => $q->where('division', $request->division))
            ->when($request->year, fn($q) => $q->whereYear('created_at', $request->year))
            ->get();

        return Inertia::render('Reports/DefectReport', [
            'reports' => $reports,
        ]);
    }
}
