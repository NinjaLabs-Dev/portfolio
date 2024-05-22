<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExperienceRole extends Model {
    protected $fillable = [
        'experience_id',
        'name',
        'start_date',
        'end_date',
        'order',
    ];

    protected function casts() {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }

    public function experience(): BelongsTo {
        return $this->belongsTo(Experience::class);
    }
}
