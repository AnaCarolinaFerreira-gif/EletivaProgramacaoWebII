<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store'); 
    Route::get('/{cliente}', [ClienteController::class, 'show'])->name('clientes.show'); 
    Route::put('/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy'); 
});


Route::prefix('vagas')->group(function () {
    Route::get('/', [VagaController::class, 'index'])->name('vagas.index'); 
    Route::post('/', [VagaController::class, 'store'])->name('vagas.store'); 
    Route::get('/{vaga}', [VagaController::class, 'show'])->name('vagas.show');
    Route::put('/{vaga}', [VagaController::class, 'update'])->name('vagas.update');
    Route::delete('/{vaga}', [VagaController::class, 'destroy'])->name('vagas.destroy'); 
});

Route::prefix('veiculos')->group(function () {
    Route::get('/', [VeiculoController::class, 'index'])->name('veiculos.index'); 
    Route::post('/', [VeiculoController::class, 'store'])->name('veiculos.store'); 
    Route::get('/{veiculo}', [VeiculoController::class, 'show'])->name('veiculos.show'); 
    Route::put('/{veiculo}', [VeiculoController::class, 'update'])->name('veiculos.update'); 
    Route::delete('/{veiculo}', [VeiculoController::class, 'destroy'])->name('veiculos.destroy'); 
});
