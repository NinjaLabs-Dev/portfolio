<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    protected $fillable = [
        'name',
        'project_url',
        'overview',
        'snapshot',
        'order',
    ];
}
