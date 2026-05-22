<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| RUTAS PÚBLICAS
|--------------------------------------------------------------------------
*/

Route::get('/',           [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/menu',       [PaginaController::class, 'menu'])->name('menu');
Route::get('/nosotros',   [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto',   [PaginaController::class, 'contacto'])->name('contacto');
Route::get('/formales',   [PaginaController::class, 'formales'])->name('formales');
Route::get('/deportivos', [PaginaController::class, 'deportivos'])->name('deportivos');
Route::get('/urbanos',    [PaginaController::class, 'urbanos'])->name('urbanos');
Route::get('/accis',      [PaginaController::class, 'accis'])->name('accis');
Route::get('/pqrs',       [PaginaController::class, 'pqrs'])->name('pqrs');

Route::post('/pqrs',          [PqrsController::class, 'store'])->name('pqrs.store');

// Módulo zapatos
Route::get('/zapatos',        [PaginaController::class, 'zapatos'])->name('zapatos');
Route::post('/zapatos/guardar', [PaginaController::class, 'guardarZapato'])->name('zapatos.guardar');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| RUTAS PROTEGIDAS
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile',    [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mensajes',              [PqrsController::class, 'index'])->name('mensajes');
    Route::get('/mensajes/{id}/editar',  [PqrsController::class, 'edit'])->name('mensajes.edit');
    Route::put('/mensajes/{id}',         [PqrsController::class, 'update'])->name('mensajes.update');
    Route::delete('/mensajes/{id}',      [PqrsController::class, 'destroy'])->name('mensajes.destroy');
    Route::get('/zapatos',        [PaginaController::class, 'zapatos'])->name('zapatos');
Route::post('/zapatos/guardar', [PaginaController::class, 'guardarZapato'])->name('zapatos.guardar');

});

require __DIR__.'/auth.php';