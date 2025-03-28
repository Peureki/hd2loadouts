<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loadout extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'guest_name',
        'name',
        'description',
    ];
}
