<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Weapon extends Model
{
    protected $fillable = [
        'id',
        'type',
        'description',
        'traits',
        'stats',
        'icon',
        'armor_penetration',
    ];

    protected $casts = [
        'traits' => 'array', 
        'stats' => 'array',
    ];
}
