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

// Exercicio 1
Route::get('/exercicio1', [ListaExerciciosController::class, 'mostrarExercicio1']);
Route::get('/resultado-exercicio1', [ListaExerciciosController::class, 'somar']);

// Exercicio 2
Route::get('/exercicio2', [ListaExerciciosController::class, 'mostrarExercicio2']);
Route::get('/resultado-exercicio2', [ListaExerciciosController::class, 'subtrair']);

// Exercicio 3
Route::get('/exercicio3', [ListaExerciciosController::class, 'mostrarExercicio3']);
Route::get('/resultado-exercicio3', [ListaExerciciosController::class, 'multiplicar']);

// Exercicio 4
Route::get('/exercicio4', [ListaExerciciosController::class, 'mostrarExercicio4']);
Route::get('/resultado-exercicio4', [ListaExerciciosController::class, 'divisao']);

// Exercicio 5
Route::get('/exercicio5', [ListaExerciciosController::class, 'mostrarExercicio5']);
Route::get('/resultado-exercicio5', [ListaExerciciosController::class, 'media']);

// Exercicio 6
Route::get('/exercicio6', [ListaExerciciosController::class, 'mostrarExercicio6']);
Route::get('/resultado-exercicio6', [ListaExerciciosController::class, 'conversaoC']);

// Exercicio 7
Route::get('/exercicio7', [ListaExerciciosController::class, 'mostrarExercicio7']);
Route::get('/resultado-exercicio7', [ListaExerciciosController::class, 'conversaoF']);

// Exercicio 8
Route::get('/exercicio8', [ListaExerciciosController::class, 'mostrarExercicio8']);
Route::get('/resultado-exercicio8', [ListaExerciciosController::class, 'calcularAreaRetangulo']);

// Exercicio 9
Route::get('/exercicio9', [ListaExerciciosController::class, 'mostrarExercicio9']);
Route::get('/resultado-exercicio9', [ListaExerciciosController::class, 'calcularAreaCircle']);

// Exercicio 10
Route::get('/exercicio10', [ListaExerciciosController::class, 'mostrarExercicio10']);
Route::get('/resultado-exercicio10', [ListaExerciciosController::class, 'calcularPerimetroTriangulo']);

// Exercicio 11
Route::get('/exercicio11', [ListaExerciciosController::class, 'mostrarExercicio11']);
Route::get('/resultado-exercicio11', [ListaExerciciosController::class, 'calcularPerimetroCirculoo']);

// Exercicio 12
Route::get('/exercicio12', [ListaExerciciosController::class, 'mostrarExercicio12']);
Route::get('/resultado-exercicio12', [ListaExerciciosController::class, 'calcularPow']);

// Exercicio 13
Route::get('/exercicio13', [ListaExerciciosController::class, 'mostrarExercicio13']);
Route::get('/resultado-exercicio13', [ListaExerciciosController::class, 'converterCentimetros']);

// Exercicio 14
Route::get('/exercicio14', [ListaExerciciosController::class, 'mostrarExercicio14']);
Route::get('/resultado-exercicio14', [ListaExerciciosController::class, 'converterMilha']);

// Exercicio 15
Route::get('/exercicio15', [ListaExerciciosController::class, 'mostrarExercicio15']);
Route::get('/resultado-exercicio15', [ListaExerciciosController::class, 'calcularImc']);

// Exercicio 16
Route::get('/exercicio16', [ListaExerciciosController::class, 'mostrarExercicio16']);
Route::get('/resultado-exercicio16', [ListaExerciciosController::class, 'calcularDesconto']);

// Exercicio 17
Route::get('/exercicio17', [ListaExerciciosController::class, 'mostrarExercicio17']);
Route::get('/resultado-exercicio17', [ListaExerciciosController::class, 'calcularCapital']);

// Exercicio 18
Route::get('/exercicio18', [ListaExerciciosController::class, 'mostrarExercicio18']);
Route::get('/resultado-exercicio18', [ListaExerciciosController::class, 'calculateCompoundInterest']);

// Exercicio 19
Route::get('/exercicio19', [ListaExerciciosController::class, 'mostrarExercicio19']);
