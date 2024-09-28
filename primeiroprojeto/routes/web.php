<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ListaExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'mostrarForm']);

Route::post('/processarForm', [FormController::class, 
                'receberValor']);

Route::post('/exercicio1', [ListaExerciciosController::class, 'mostrarExercicio1']);
Route::get('/resultado-exercicio1', [ListaExerciciosController::class, 'somar']);

Route::post('/exercicio2', [ListaExerciciosController::class, 'mostrarExercicio2']);
Route::get('/resultado-exercicio2', [ListaExerciciosController::class, 'subtrair']);

Route::post('/exercicio3', [ListaExerciciosController::class, 'mostrarExercicio2']);
Route::get('/resultado-exercicio3', [ListaExerciciosController::class, 'multiplicar']);
