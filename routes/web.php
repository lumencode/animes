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

use App\Activity;
use Illuminate\Http\Request;

Route::get('actividades/{assigned}', function ($assigned) {
    return Activity::where('assigned', $assigned)->get();
});

Route::post('actividades/crear', function (Request $request) {

    Activity::create($request->all());

    return "ok";
});

Route::post('actividades/{id}/done', function ($id) {

    $model = Activity::find($id);
    $model->done = true;
    $model->save();

    return "ok";
});