@extends('layout')

@section('title', 'Editar película')

@section('content')
    <h2 class="mb-4">Editar película</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('actualizar', $pelicula->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('formulario', ['pelicula' => $pelicula])
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
