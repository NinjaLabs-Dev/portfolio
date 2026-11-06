<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CvVisit extends Model
{
    public const UPDATED_AT = null;

    protected $fillable = [
        'cv_id',
    ];

    public function cv(): BelongsTo
    {
        return $this->belongsTo(Cv::class);
    }
}
