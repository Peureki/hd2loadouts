<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Weapon extends Model
{
    protected $fillable = [
        'id',
        'name',
        'category',
        'type',
        'description',
        'damage',
        'armor_penetration',
        'capacity',
        'recoil',
        'fire_rate',
        'traits',
        'icon',
    ];

    protected $casts = [
        'traits' => 'array', 
    ];
}
