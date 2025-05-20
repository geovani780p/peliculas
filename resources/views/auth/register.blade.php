@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100 text-white" style="background-image: url('/img/fondo-retumbar.jpg'); background-size: cover;">
    <div class="card bg-dark bg-opacity-75 p-4 rounded shadow" style="width: 100%; max-width: 400px;">
        <h3 class="text-center text-danger mb-3 fw-bold">Registro</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label>Nombre:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Correo:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Contraseña:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Confirmar contraseña:</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-danger w-100 fw-bold">Registrarse</button>
        </form>

        <p class="mt-3 text-center">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="text-info fw-bold">Inicia sesión</a>
        </p>
    </div>
</div>
@endsection

