<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = [
        'targa',
        'marca',
        'anno_immatricolazione',
        'km'
    ];

    public function optionals(){
        return $this->belongsToMany(Optional::class);
    }
}
