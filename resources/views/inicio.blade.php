@extends('layout')

@section('title', 'Películas El Chino - Retumbar Edition')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center text-center" style="height: 80vh;">
    <h1 class="display-3 fw-bold text-white text-shadow mb-4" style="text-shadow: 2px 2px 8px black;">
        Películas El Chino
    </h1>
    <a href="{{ route('listado_peliculas') }}" class="btn btn-danger btn-lg px-4 py-2 shadow">
        Ver Catálogo
    </a>
</div>
@endsection
