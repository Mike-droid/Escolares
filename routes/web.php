<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumnos', 'App\Http\Controllers\alumnosController');
Route::resource('departamentos', 'App\Http\Controllers\departamentosController');
Route::resource('personales', 'App\Http\Controllers\personalesController');
Route::resource('carreras', 'App\Http\Controllers\carrerasController');
Route::resource('reticulas', 'App\Http\Controllers\reticulasController');
Route::resource('materias', 'App\Http\Controllers\materiasController');
Route::resource('periodos', 'App\Http\Controllers\periodosController');
Route::resource('grupos', 'App\Http\Controllers\gruposController');
Route::resource('horarios', 'App\Http\Controllers\horariosController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
