<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <style>




body {
    position: relative;
    background: url('{{ asset('images/fondo-retumbar.jpg') }}') no-repeat center center fixed;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Anton', sans-serif;
    color: white;
    min-height: 100vh;
}

.navbar {
    background-color: rgba(20, 20, 20, 0.95);
    border-bottom: 3px solid crimson;
}

h1, h2 {
    text-shadow: 2px 2px 6px black;
}

        body {
            background: url('{{ asset('imagenes/retumbar.webp') }}') no-repeat center center fixed;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Anton', sans-serif;
            color: white;
            min-height: 100vh;
        }

        .navbar {
            background-color: rgba(20, 20, 20, 0.95);
            border-bottom: 3px solid crimson;
        }

        .navbar-brand, .nav-link {
            color: crimson !important;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar-toggler {
            background-color: crimson;
        }

        h1, h2 {
            color: white;
            text-shadow: 2px 2px 4px black;
        }

        .card {
            background: rgba(0, 0, 0, 0.8);
            border: 1px solid crimson;
            color: white;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
            transition: 0.3s;
            border-radius: 8px;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 0 20px crimson;
        }

        .btn {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .btn-danger {
            background-color: crimson;
            border: none;
        }

        .btn-danger:hover {
            background-color: darkred;
        }

        .btn-primary {
            background-color: #222;
            border: 1px solid crimson;
        }

        .btn-primary:hover {
            background-color: crimson;
            color: white;
        }
        body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5); 
    z-index: -1;
}

    </style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">🔥 Películas El Chino en caliente</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('listado_peliculas') }}">Listado</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('agregar') }}">Agregar</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
