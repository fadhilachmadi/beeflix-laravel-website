<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Episode;

class MoviesController extends Controller
{

    //
    // public function viewAllMovies(){


        function index(Request $request){

           $search = $request->get('search');
           $movies = Movie::where('title', 'like', '%'.$search.'%')
                            ->orWhereHas('Genre', function ($query) use ($search){
                                     $query->where("name", 'like', '%'.$search.'%'); })->get();

           return view('home')
           ->with(compact('movies'));
        }
        
        // $movies = Movie::all();

        // return view('home')
        //     ->with(compact('genres'))
        //     ->with(compact('movies'));
    // }

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
