<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoadoutArmory extends Model
{
    protected $fillable = [
        'id',
        'loadout_id',
        'armory_id',
    ];
}
