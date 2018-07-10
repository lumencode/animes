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
use App\Anime;
use App\Favorite;
use Illuminate\Http\Request;

Route::get('tareas/{assigned}', function ($assigned) {
    return Activity::where('assigned', $assigned)->get();
});

Route::post('tareas/{codigo}/crear', function (Request $request, $codigo) {

    $model = Activity::create([
        'date' => $request->get('date'),
        'activity' => $request->get('activity'),
        'assigned' => $codigo,
    ]);

    return $model;
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

Route::get('tareas/{id}/mostrar', function ($id) {

    $item = Activity::find($id);

    return [
        'id'          => $item->id,
        'assigned'    => $item->assigned,
        'date'        => $item->date,
        'favorite'    => $item->done,
        'description' => $item->activity,
    ];
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

Route::post('{code}/anime/favorite', function (Request $request, $code) {

    $id = $request->input('id');

    $anime = Favorite::where('codigo', $code)
        ->where('anime_id', $id)
        ->first();

    if($anime == null)
        Favorite::create([
            'codigo' => $code,
            'anime_id' => $id
        ]);
    else
        $anime->delete();

    return "true";
});

Route::get('{code}/animes', function ($code) {
    $ids = Favorite::where('codigo', $code)
        ->get()
        ->pluck('id');

    return Anime::whereIn('id', $ids)->get();
});

Route::get('animes', function () {
   return Anime::all();
});
