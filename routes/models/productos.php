<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::prefix('productos')->group(function() {

    Route::controller(ProductoController::class)->group(function() {
        // INFO: RUTAS PARA LAS INTERFACES
        Route::get('/', 'index')->name('productos.index');
        Route::get('/create', 'create')->name('productos.create');
        Route::get('/edit', 'edit')->name('productos.edit');
        Route::get('/show/{producto}', 'show')->name('productos.show');

        // INFO: RUTAS PARA LAS OPERACIONES
        Route::post('/{producto}', 'store');
        Route::put('/{producto}', 'update');
        Route::delete('/{producto}', 'destroy');
    });

})->middleware(['auth:sanctum']);
