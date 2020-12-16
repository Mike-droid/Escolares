<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('alumnos', 'App\Http\Controllers\alumnosController')->middleware('auth');
Route::resource('departamentos', 'App\Http\Controllers\departamentosController')->middleware('auth');
Route::resource('personales', 'App\Http\Controllers\personalesController')->middleware('auth');
Route::resource('carreras', 'App\Http\Controllers\carrerasController')->middleware('auth');
Route::resource('reticulas', 'App\Http\Controllers\reticulasController')->middleware('auth');
Route::resource('materias', 'App\Http\Controllers\materiasController')->middleware('auth');
Route::resource('periodos', 'App\Http\Controllers\periodosController')->middleware('auth');
Route::resource('grupos', 'App\Http\Controllers\gruposController')->middleware('auth');
Route::resource('horarios', 'App\Http\Controllers\horariosController')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');