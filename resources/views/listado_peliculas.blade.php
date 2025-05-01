@extends('layout')

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
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->titulo }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($p->descripcion, 100) }}</p>
                        <p><strong>Género:</strong> {{ $p->genero }}</p>
                        <p><strong>Director:</strong> {{ $p->director }}</p>
                        <p><strong>Estreno:</strong> {{ $p->fecha_estreno }}</p>
                    </div>
                    <div class="card-footer text-center">
                    <a href="{{ route('editar', $p->id) }}" class="btn btn-warning me-2">Editar</a>

<form action="{{ route('eliminar', $p->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta película?')">Eliminar</button>
</form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
