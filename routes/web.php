<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\MaestrosController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\GruposController;
use App\Livewire\ActualizarAlumno;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('alumnos',AlumnosController::class)->middleware('auth');
Route::resource('maestros',MaestrosController::class)->middleware('auth');
Route::resource('materias',MateriasController::class)->middleware('auth');
Route::resource('grupos',GruposController::class)->middleware('auth');

Route::get('alumno/{alumno}',ActualizarAlumno::class)->middleware('auth');



require __DIR__.'/auth.php';
