<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta pública (el catálogo es accesible para todos)
Route::get('/productos', [ProductoController::class, 'index']);

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Rutas protegidas (requieren iniciar sesión)
Route::middleware('auth')->group(function () {
    Route::get('/productos/nuevo', [ProductoController::class, 'create']);
    Route::post('/productos', [ProductoController::class, 'store']);
});