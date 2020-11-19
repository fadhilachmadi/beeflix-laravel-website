<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Episode;

class MoviesController extends Controller
{

    //
    public function viewAllMovies(){
        
        $genres = Genre::all();
        $movies = Movie::all();
        $moviesDrama = Movie::all()->where('genre_id', 1);
        $moviesKids = Movie::all()->where('genre_id', 2);
        $moviesTvShow = Movie::all()->where('genre_id', 3);
 

        return view('home')
            ->with(compact('genres'))
            ->with(compact('movies'))
            ->with(compact('moviesDrama'))
            ->with(compact('moviesKids'))
            ->with(compact('moviesTvShow'));
    }

    public function viewMovieDetail($title){

        $movieId  = Movie::where('title',$title)->first()->id;

        $episodes = Episode::where('movie_id', $movieId)->paginate(3);
        $detail = Movie::find($movieId);


        return view('movieDetail')
        ->with(compact('episodes'))
        ->with(compact('detail'));
    }

    public function viewMovieByGenre($name){
        
        $genreName  = Genre::where('name',$name)->first()->name;

        $genreId  = Genre::where('name',$name)->first()->id;
        $movies = Movie::all()->where('genre_id', $genreId);

        return view('movieByGenre')
        ->with(compact('movies'))
        ->with(compact('genreName'));
    }
}
