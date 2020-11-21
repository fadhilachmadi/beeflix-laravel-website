<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    //

    protected $fillable = ['episode', 'title', 'movie_id'];

    public function movie(){
        return $this->belongsTo('App\Movie');
    }
}
