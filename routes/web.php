<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas para las especialidades
Route::get('/especialidades', [App\Http\Controllers\SpecialtyController::class, 'index']);//listado de especialidades
Route::get('/especialidades/create', [App\Http\Controllers\SpecialtyController::class, 'create']);//crear especialidades
Route::get('/especialidades/{speciality/editar}', [App\Http\Controllers\SpecialtyController::class, 'edit']);//editar especialidades
Route::post('/especialidades', [App\Http\Controllers\SpecialtyController::class, 'senData']);//enviar especialidades