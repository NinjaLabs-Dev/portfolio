<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Experience extends Model {
    protected $fillable = [
        'name',
        'order',
        'external_url',
        'start_date',
        'end_date',
        'overview',
    ];

    protected $with = [
        'roles',
    ];

    protected function casts() {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }

    public function roles(): HasMany {
        return $this->hasMany(ExperienceRole::class);
    }
}
