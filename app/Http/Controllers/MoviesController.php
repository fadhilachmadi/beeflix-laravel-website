<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Episode;

class MoviesController extends Controller
{

    function indexAdmin(Request $request){

        $search = $request->get('search');
        $movies = Movie::where('title', 'like', '%'.$search.'%')
                        ->orWhereHas('Genre', function ($query) use ($search){
                                    $query->where("name", 'like', '%'.$search.'%'); })->get();

        return view('admin.main')
        ->with(compact('movies'));
    }

    function indexMember(Request $request){

        $search = $request->get('search');
        $movies = Movie::where('title', 'like', '%'.$search.'%')
                        ->orWhereHas('Genre', function ($query) use ($search){
                                    $query->where("name", 'like', '%'.$search.'%'); })->get();

        return view('home_member')
        ->with(compact('movies'));
    }
        
    public function viewMovieDetail($title){

        $movieId  = Movie::where('title',$title)->first()->id;

        $episodes = Episode::where('movie_id', $movieId)->paginate(3);
        $detail = Movie::find($movieId);

        

        return view('admin.movieDetail')
        ->with(compact('episodes'))
        ->with(compact('detail'));
    }

    public function viewMovieDetailMember($title){

        $movieId  = Movie::where('title',$title)->first()->id;

        $episodes = Episode::where('movie_id', $movieId)->paginate(3);
        $detail = Movie::find($movieId);

        

        return view('movieDetail_member')
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
        return view('admin.addMovie', compact('genres'));
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

        return view('admin.addEpisode', compact('movieId'));
    }

    public function deleteMovie($id){
        $episodes = Episode::where('movie_id', $id)->delete();
        Movie::destroy($id);
        return back();
    }

    public function goToUpdate($id){
        $movie = Movie::findOrFail($id);
        $genres = Genre::all();
        return view ('admin.updateMovie')
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
        
        $edtMovie = Movie::findOrFail($id)->update([
            'title' => $request->movie_title,
            'description' => $request->movie_description,
            'rating' => $request->movie_rating,
            'genre_id' => $request->genre_id,  
            'photo' => $moviePhoto  
        ]);

        $movie_id = $movie->id;
        
        $episodes = Episode::where('movie_id', $movie_id)->get();

        return redirect('/admin');
    }
}
