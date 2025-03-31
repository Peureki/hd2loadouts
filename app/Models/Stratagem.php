<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stratagem extends Model
{
    protected $fillable = [
        'id',
        'name',
        'category',
        'type',
        'description',
        'code',
        'damage',
        'armor_penetration',
        'uses',
        'capacity',
        'fire_rate',
        'cooldown',
        'call_in_time',
        'traits',
    ];

    protected $casts = [
        'code' => 'array',
        'traits' => 'array',
    ];
}
