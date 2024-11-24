<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\ProductJsonController;
use App\Http\Controllers\CarritoController;

// Ruta para ver productos
Route::get('/productos', [ProductController::class, 'agregarProductos'])->name('productos');

// Página de bienvenida con el formulario de login
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta para login (Jetstream manejará la autenticación)
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Ruta para el formulario de registro
Route::get('/register', function () {
    return view('auth.register'); // Vista personalizada para el registro
})->name('register');

// Ruta para el proceso de registro (Jetstream manejará la creación de la cuenta)
Route::post('/register', [RegisterController::class, 'register']);

Auth::routes();

// Ruta para la página principal después de login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta para login (personalizada)
Route::post('/login', [CustomLoginController::class, 'store'])->name('login');



Route::get('/productos', [ProductController::class, 'agregarProductos'])->name('productos'); // Vista de productos


Route::get('/productos/{especie}', [ProductJsonController::class, 'filtrarPorEspecie'])->name('productos.especie'); // Filtrar por especie con vista

Route::get('/producto/{id}', [ProductController::class, 'getProducto']);




Route::post('/carrito/agregar/{productId}', [CarritoController::class, 'agregar']);
Route::post('/carrito/eliminar/{productId}', [CarritoController::class, 'eliminar']);
Route::post('/carrito/reducir/{productId}', [CarritoController::class, 'reducir']);
Route::post('/carrito/aumentar/{productId}', [CarritoController::class, 'aumentar']);
Route::get('/carrito', [CarritoController::class, 'obtenerCarrito']);

