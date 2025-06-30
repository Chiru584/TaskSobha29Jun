<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubActivity extends Model
{
    protected $fillable = [
        'activity_id', 'name', 'description',
        'inspection_required_count', 'date'
    ];

    public function activity() 
    {
        return $this->belongsTo(Activity::class);
    }
}
