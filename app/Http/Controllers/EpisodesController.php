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

        return view('addEpisode', compact('movieId'));
    }
}
