@extends('layout')

@php
    use Illuminate\Support\Str;
@endphp

@section('title', 'Listado de Películas')

@section('content')
    <h2 class="mb-4 text-center">Listado de Películas</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-end mb-3">
        <a href="{{ route('agregar') }}" class="btn btn-primary">Agregar nueva película</a>
    </div>

    <div class="row">
        @foreach($peliculas as $p)
            <div class="col-md-4 mb-4">
                <div class="card h-100 bg-dark text-light border border-danger shadow-sm">

                    @if ($p->imagen)
                        <img src="{{ asset('storage/' . $p->imagen) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title text-danger fw-bold">{{ $p->titulo }}</h5>
                        <p class="card-text">{{ Str::limit($p->descripcion, 100) }}</p>
                        <ul class="list-unstyled small">
                            <li><strong>🎬 Género:</strong> {{ $p->genero }}</li>
                            <li><strong>🎥 Director:</strong> {{ $p->director }}</li>
                            <li><strong>📅 Estreno:</strong> {{ $p->fecha_estreno }}</li>
                        </ul>
                    </div>

                    <div class="card-footer bg-transparent text-center">
                        <a href="{{ route('editar', $p->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                        <form action="{{ route('eliminar', $p->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta película?')">Eliminar</button>
                        </form>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
