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
Route::get('/movie/{title}', 'MoviesController@viewMovieDetail');
Route::get('/genre/{name}', 'MoviesController@viewMovieByGenre');


