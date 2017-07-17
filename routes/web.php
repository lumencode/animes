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

Route::get('tareas/{assigned}', function ($assigned) {
    return Activity::where('assigned', $assigned)
        ->get()
        ->map(function ($item) {
            return [
                'id'          => $item->id,
                'assigned'    => $item->assigned,
                'date'        => $item->date,
                'favorite'    => $item->done,
                'description' => $item->activity,
            ];
        });
});

Route::post('tareas/crear', function (Request $request) {

    Activity::create($request->all());

    return "ok";
});

Route::post('tareas/{id}/favorito', function ($id) {

    $model = Activity::find($id);
    $model->done = !$model->done;
    $model->save();

    return "ok";
});


Route::post('actividades/{id}/done', function ($id) {

    $model = Activity::find($id);
    $model->done = true;
    $model->save();

    return "ok";
});