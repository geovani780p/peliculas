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

    public function index(Request $request)
    {
        $query = Catalogo::query();

        if ($request->has('buscar')) {
            $query->where('titulo', 'like', '%' . $request->buscar . '%');
        }

        $peliculas = $query->get();

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
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $datos = $request->except('_token');

        if ($request->hasFile('imagen')) {
            $datos['imagen'] = $request->file('imagen')->store('imagenes', 'public');
        }

        Catalogo::create($datos);

        return redirect()->route('listado_peliculas')->with('success', 'Película agregada correctamente');
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
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $pelicula = Catalogo::findOrFail($id);
        $datos = $request->except(['_token', '_method']);

        if ($request->hasFile('imagen')) {
            $datos['imagen'] = $request->file('imagen')->store('imagenes', 'public');
        }

        $pelicula->update($datos);

        return redirect()->route('listado_peliculas')->with('success', 'Película actualizada correctamente');
    }

    public function destroy($id)
    {
        Catalogo::findOrFail($id)->delete();
        return redirect()->route('listado_peliculas')->with('success', 'Película eliminada');
    }
}
