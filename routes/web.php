<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'MoviesController@index');

Route::get('/addMovie', 'MoviesController@goToAdd');

Route::get('/movie/{title}', 'MoviesController@viewMovieDetail');

Route::get('/genre/{name}', 'MoviesController@viewMovieByGenre');

Route::post('/addEpisode', 'MoviesController@addMovie');

Route::post('/createEpisode', 'EpisodesController@addEpisodes');

Route::get('/update/{id}', 'MoviesController@goToUpdate');

Route::patch('/update/{id}', 'MoviesController@updateMovie');

Route::delete('/delete/{id}', 'MoviesController@deleteMovie');




