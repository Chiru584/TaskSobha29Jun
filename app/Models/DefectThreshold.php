<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DefectThreshold extends Model {
    protected $fillable = [
        'project', 'division', 'sub_division',
        'activity', 'sub_activity', 'defect_type',
        'defect_threshold', 'sporadic_threshold', 'chronic_threshold',
        'severity_index', 'control_index',
    ];
}
