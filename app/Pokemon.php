<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public $table = 'pokemon';
    public $guarded = [];
    public $timestamps = false;

    public $casts = [
        "esta_atrapado" => "boolean"
    ];
}
