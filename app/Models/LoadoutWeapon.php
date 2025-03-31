<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoadoutWeapon extends Model
{
    protected $fillable = [
        'id',
        'loadout_id',
        'weapon_id',
    ];
}
