<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pokemon extends Model
{
    public $table = 'pokemones';
    public $guarded = [];
    public $timestamps = false;

    public function ubicaciones()
    {
        return $this->hasMany(Ubicacion::class);
    }

    public function getImagenAttribute($value)
    {
        return url($value);
    }
}
