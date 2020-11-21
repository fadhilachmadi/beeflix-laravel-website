<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Movie extends Model
{
    //

    protected $fillable = ['title', 'genre_id', 'description', 'rating', 'photo'];

    public function genre(){
        return $this->belongsTo('App\Genre');
    }

    public function episode(){
        return $this->hasMany('App\Episode');
    }

}
