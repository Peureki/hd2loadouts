<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoadoutArmor extends Model
{
    protected $fillable = [
        'id',
        'loadout_id',
        'armor_id',
    ];
}
