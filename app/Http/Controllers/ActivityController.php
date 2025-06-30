<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ActivityController extends Controller 
{
    public function index(Request $request) 
    {
        $activities = Activity::with('subActivities')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function($activity) {
                return [
                    'id' => $activity->id,
                    'name' => $activity->name,
                    'description' => $activity->description,
                    'time' => $activity->created_at,
                    'subActivities' => $activity->subActivities,
                    'count' => $activity->subActivities ? $activity->subActivities->count() : 0,
                ];
            });

        return Inertia::render('Reports/AllActivities', [
            'activities' => $activities,
        ]);
    }
}