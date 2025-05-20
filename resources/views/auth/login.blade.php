@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100 text-white">
    <div class="card bg-dark bg-opacity-75 p-4 rounded shadow" style="max-width: 400px; width: 100%;">
        <h3 class="text-center text-danger mb-3 fw-bold">Iniciar Sesión</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label>Correo:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Contraseña:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-danger w-100 fw-bold">Entrar</button>
        </form>

        <p class="mt-3 text-center">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}" class="text-info fw-bold">Regístrate</a>
        </p>
    </div>
</div>
@endsection
