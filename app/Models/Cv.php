<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cv extends Model
{
    protected $fillable = [
        'approval_code',
        'expiry',
    ];

    protected function casts(): array
    {
        return [
            'expiry' => 'datetime',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Cv $cv): void {
            if (blank($cv->approval_code)) {
                $cv->approval_code = Str::random(60);
            }
        });
    }
}
