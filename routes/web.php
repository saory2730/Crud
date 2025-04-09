<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    
    Route::resource('categorias', CategoriaController::class);

    
    Route::resource('productos', ProductoController::class);
});
