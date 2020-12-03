<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumnos', 'App\Http\Controllers\alumnosController');
Route::resource('departamentos', 'App\Http\Controllers\departamentosController');
Route::resource('personales', 'personalesController');