<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');

Route::resource('clientes', ClienteController::class);
Route::get('/clientes/{id}/delete', [ClienteController::class, 'delete'])->name('clientes.delete');
