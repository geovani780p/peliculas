<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function index()
    {
        $peliculas = Catalogo::all();
        return view('listado_peliculas', compact('peliculas'));
    }

    public function create()
    {
        return view('agregar');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'director' => 'required',
            'fecha_estreno' => 'required|date',
        ]);

        Catalogo::create($request->all());
        return redirect()->route('listado_peliculas')->with('success', 'Película agregada');
    }

    public function edit($id)
    {
        $pelicula = Catalogo::findOrFail($id);
        return view('editar', compact('pelicula'));
    }

    public function update(Request $request, $id)
    {
    
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'director' => 'required',
            'fecha_estreno' => 'required|date',
        ]);

        $pelicula = Catalogo::findOrFail($id);
        $pelicula->update($request->all());
        return redirect()->route('listado_peliculas')->with('success', 'Película actualizada');
    }

    public function destroy($id)
{
    $pelicula = Catalogo::findOrFail($id);
    $pelicula->delete();
    return redirect()->route('listado_peliculas')->with('success', 'Película eliminada');
}

}
