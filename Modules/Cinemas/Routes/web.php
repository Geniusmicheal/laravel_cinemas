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
Route::get('/addlocation', 'CinemasController@create')->name('addlocation');
Route::post('/addlocation', 'CinemasController@store');
});
Route::prefix('location')->group(function() {
    Route::get('/', 'CinemasController@index')->name('location');
});