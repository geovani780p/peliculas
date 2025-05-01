<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;

Route::get('/', [CatalogoController::class, 'inicio'])->name('inicio');
Route::get('/listado', [CatalogoController::class, 'index'])->name('listado_peliculas');
Route::get('/agregar', [CatalogoController::class, 'create'])->name('agregar');
Route::post('/guardar', [CatalogoController::class, 'store'])->name('guardar');
Route::get('/editar/{id}', [CatalogoController::class, 'edit'])->name('editar');
Route::put('/actualizar/{id}', [CatalogoController::class, 'update'])->name('actualizar');
Route::delete('/eliminar/{id}', [CatalogoController::class, 'destroy'])->name('eliminar');
