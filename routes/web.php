<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogoController;

// Redirección por defecto al login
Route::get('/', function () {
    return redirect()->route('login');
});

// Rutas para los usuarios NO logueados
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Rutas para usuarios ya logueados
Route::middleware('auth')->group(function () {
    Route::get('/inicio', [CatalogoController::class, 'inicio'])->name('inicio');
    Route::get('/listado', [CatalogoController::class, 'index'])->name('listado_peliculas');
    Route::get('/agregar', [CatalogoController::class, 'create'])->name('agregar');
    Route::post('/guardar', [CatalogoController::class, 'store'])->name('guardar');
    Route::get('/editar/{id}', [CatalogoController::class, 'edit'])->name('editar');
    Route::put('/actualizar/{id}', [CatalogoController::class, 'update'])->name('actualizar');
    Route::delete('/eliminar/{id}', [CatalogoController::class, 'destroy'])->name('eliminar');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
