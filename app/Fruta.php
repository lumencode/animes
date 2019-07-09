<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    protected $table = 'frutas';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'me_gusta' => 'boolean'
    ];
}
