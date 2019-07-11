<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($code)
    {
        return Pelicula::where('codigo', $code)->get();
    }

    public function store($code, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'fecha_de_estreno' => 'required',
            'visitas' => 'required',
            'imagen_url' => 'required',
        ]);

        $model = Pelicula::create([
            'nombre' => $request->get('nombre'),
            'codigo' => $code,
            'fecha_de_estreno' => $request->get('fecha_de_estreno'),
            'visitas' => $request->get('visitas'),
            'imagen_url' => $request->get('imagen_url'),
        ]);

        return $model;
    }
}
