<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Movie extends Model
{
    //

    public function genre(){
        return $this->belongsTo('App\Genre');
    }

    public function episode(){
        return $this->hasMany('App\Episode');
    }

}
