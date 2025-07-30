<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;  // <--- Esto debes agregar

Route::get('/', function () {
    return view('welcome');
});

// Ruta para CRUD de productos:
Route::resource('products', ProductController::class);

