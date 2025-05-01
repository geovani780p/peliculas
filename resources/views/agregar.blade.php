@extends('layout')

@section('title', 'Agregar película')

@section('content')
    <h2 class="mb-4">Agregar nueva película</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guardar') }}" method="POST">
        @csrf
        @include('formulario')
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
