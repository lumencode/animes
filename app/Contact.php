<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = "contacts";
    public $guarded = [];
    public $timestamps = false;

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
