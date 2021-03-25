<?php

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
Route::group(['middleware' => 'auth:web'], function () {
Route::get('/addmovie', 'MoviesController@create')->name('addmovie');
Route::post('/addmovie', 'MoviesController@store');
});
Route::prefix('movies')->group(function() {
    Route::get('/', 'MoviesController@showlist')->name('movies');
    Route::get('/{id}', 'MoviesController@show')->name('moviesingle');
    
});

Route::get('/', 'MoviesController@index')->name('home');


