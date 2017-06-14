<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Anime extends Model
{
    protected $table = 'animes';

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function getImagenAttribute($value){
        return URL::to('img/' . $value . '.jpg');
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = strtolower($value);
    }
}
