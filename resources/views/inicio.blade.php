@extends('layout')

@section('title', 'Inicio')

@section('content')
<div class="text-center mt-5">
    <h1 class="display-4">Bienvenido a Películas El Chino</h1>
    <p class="lead">Has iniciado sesión correctamente. Usa el menú para navegar.</p>
    <a href="{{ route('listado_peliculas') }}" class="btn btn-danger mt-3">Ir al Catálogo</a>
</div>
@endsection
