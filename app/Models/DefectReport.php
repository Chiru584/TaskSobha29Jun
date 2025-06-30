<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DefectReport extends Model
{
    protected $fillable = [
        'sou', 'project', 'division', 'sub_division',
        'activity', 'sub_activity', 'defect_type',
        'defect_threshold', 'yearly_count',
    ];
}
