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

Route::get('/', 'MoviesController@indexMember');
Route::get('/admin', 'MoviesController@indexAdmin')->middleware('admin');


Route::get('/movie/{title}', 'MoviesController@viewMovieDetail');
Route::get('member/movie/{title}', 'MoviesController@viewMovieDetailMember');

Route::get('/genre/{name}', 'MoviesController@viewMovieByGenre');

Route::get('/addMovie', 'MoviesController@goToAdd');

Route::post('/addEpisode', 'MoviesController@addMovie');

Route::post('/createEpisode', 'EpisodesController@addEpisodes');

Route::get('/updateMovie/{id}', 'MoviesController@goToUpdate');

Route::patch('/updateMovie/{id}', 'MoviesController@updateMovie');

Route::get('/episode/{id}', 'EpisodesController@goToUpdate');

Route::patch('/updateEpisode/{id}', 'EpisodesController@updateEpisode');

Route::delete('/delete/{id}', 'MoviesController@deleteMovie');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/menu', 'LoginController@redirectTo');
