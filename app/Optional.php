<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Optional extends Model
{
    public function cars(){
        return $this->belongsToMany(Car::class);
    }
}
