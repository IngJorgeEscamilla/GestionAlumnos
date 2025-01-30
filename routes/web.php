<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\MaestrosController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\GruposController;
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

Route::resource('alumnos',AlumnosController::class);
Route::resource('maestros',MaestrosController::class);
Route::resource('materias',MateriasController::class);
Route::resource('grupos',GruposController::class);



require __DIR__.'/auth.php';
