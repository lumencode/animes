<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $table = 'entrenadores';
    protected $guarded = [];

    public function pokemones()
    {
        return $this->belongsToMany(Pokemon::class);
    }

    public function getImagenAttribute($value)
    {
        return url($value);
    }

}
