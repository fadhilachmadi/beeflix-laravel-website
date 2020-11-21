<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Episode;

class MoviesController extends Controller
{

    function index(Request $request){

        $search = $request->get('search');
        $movies = Movie::where('title', 'like', '%'.$search.'%')
                        ->orWhereHas('Genre', function ($query) use ($search){
                                    $query->where("name", 'like', '%'.$search.'%'); })->get();

        return view('home')
        ->with(compact('movies'));
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

    
    public function goToAdd(){
        $genres = Genre::all();
        return view('addMovie', compact('genres'));
    }

    public function addMovie(Request $request){

        
        $photoName = $request->movie_photo->getClientOriginalName() . '-' . time() . '.' . $request->movie_photo->extension();
        $request->movie_photo->move(public_path('image'), $photoName);
        
        $photo = '/image/' . $photoName;


        $newMovie = Movie::create([
            'title' => $request->movie_title,
            'description' => $request->movie_description,
            'rating' => $request->movie_rating,
            'genre_id' => $request->genre_id,  
            'photo' => $photo        
        ]);

        $movieId = $newMovie->id;

        return view('addEpisode', compact('movieId'));
    }

    public function deleteMovie($id){
        $episodes = Episode::where('movie_id', $id)->delete();
        Movie::destroy($id);
        return back();
    }

    public function goToUpdate($id){
        $movie = Movie::findOrFail($id);
        $genres = Genre::all();
        return view ('update')
        ->with(compact('movie'))
        ->with(compact('genres'));
        
    }

    public function updateMovie(Request $request, $id){

        $movie = Movie::findOrFail($id);
    
        if($request->movie_photo == null){
            $moviePhoto = $movie->photo;
            
        }
        else{
            $photoOriginName = $request->movie_photo->getClientOriginalName();
            $photoFullName = $photoOriginName . '-' . time() . '.' . $request->movie_photo->extension();
            $request->movie_photo->move(public_path('image'), $photoFullName);
            $moviePhoto = '/image/' . $photoFullName;
        }
        
        Movie::findOrFail($id)->update([
            'title' => $request->movie_title,
            'description' => $request->movie_description,
            'rating' => $request->movie_rating,
            'genre_id' => $request->genre_id,  
            'photo' => $moviePhoto  
        ]);
        
        return redirect('/');

    }
}
