<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculaController extends Controller
{
    public function index($codigo)
    {
        return Pelicula::where('codigo', $codigo)->get();
    }

    public function store(Request $request, $codigo)
    {
        $this->validate($request, [
            'name' => 'required',
            'fecha_de_estreno' => 'required',
            'visitas' => 'required',
            'imagen_url' => 'required',
        ]);

        $model = Pelicula::create([
            'nombre' => $request->get('nombre'),
            'codigo' => $codigo,
            'fecha_de_estreno' => $request->get('fecha_de_estreno'),
            'visitas' => $request->get('visitas'),
            'imagen_url' => $request->get('imagen_url'),
        ]);

        return $model;
    }
}
