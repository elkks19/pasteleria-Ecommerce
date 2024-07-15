<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::prefix('clientes')->group(function() {

    Route::controller(ClienteController::class)->group(function() {
        // INFO: RUTAS PARA LAS INTERFACES
        Route::get('/', 'index')->name('clientes.index');
        Route::get('/create', 'create')->name('clientes.create');
        Route::get('/edit', 'edit')->name('clientes.edit');
        Route::get('/show/{cliente}', 'show')->name('clientes.show');

        // INFO: RUTAS PARA LAS OPERACIONES
        Route::post('/{cliente}', 'store');
        Route::put('/{cliente}', 'update');
        Route::delete('/{cliente}', 'destroy');
    });

})->middleware(['auth:sanctum']);
