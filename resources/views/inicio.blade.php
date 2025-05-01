@extends('layout')

@section('title', 'Películas El Chino - Retumbar Edition')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4 display-4 text-white">Películas El Chino</h1>
        <a href="{{ route('listado_peliculas') }}" class="btn btn-danger btn-lg mt-4">Ver Catálogo</a>
    </div>
@endsection
