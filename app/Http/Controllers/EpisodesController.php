<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Episode;

class EpisodesController extends Controller
{
    public function addEpisodes(Request $request){
      
       

        $newEpisode = Episode::create([
            'episode' => $request->episodes_episode,
            'title' => $request->episodes_title,
            'movie_id' => $request->movie_id,
    
        ]);

        $movieId = $newEpisode->movie_id;

        return view('admin.addEpisode', compact('movieId'));
    }

    public function goToUpdate($id){
        $episode = Episode::findOrFail($id);
        return view('admin.updateEpisode', compact('episode'));
    }

    public function updateEpisode(Request $request, $id){

        $movie_id = Episode::findOrFail($id)->movie_id;
        $movie_title = Movie::findOrFail($movie_id)->title;
        
        // dd($movie_title);
        $edtEpisode = Episode::findOrFail($id)->update([
            'title' => $request->episode_title
        ]);

        return redirect('/admin');
    }
}
