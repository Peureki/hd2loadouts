<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stratagem extends Model
{
    protected $fillable = [
        'id',
        'name',
        'codes',
        'department',
        'cooldown',
        'cost',
        'unlock_level',
        'description',
        'armor_penetration',
    ];

    protected $casts = [
        'codes' => 'array',
    ];
}
