<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    protected $fillable = [
        'id',
        'type',
        'description',
        'passives',
        'stats',
        'icon',
    ];

    protected $casts = [
        'passives' => 'array',
        'stats' => 'array',
    ];

}
