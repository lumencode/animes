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

use App\Anime;

Route::get('animes', function(){
    return Anime::all();
});

Route::get('animes/{id}', function($id){
    return Anime::find($id);
});

Route::get('animes/{id}/episodios', function($id){
    return Anime::with('episodes')->find($id);
});