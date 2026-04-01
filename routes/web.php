<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Rutas principales
Route::get('/',          [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/menu',      [PaginaController::class, 'menu'])->name('menu');
Route::get('/nosotros',  [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contactos', [PaginaController::class, 'contactos'])->name('contactos');

// Categorías de Zapatos (Nuevas)
Route::get('/deportivos', [PaginaController::class, 'deportivos'])->name('deportivos');
Route::get('/formales',   [PaginaController::class, 'formales'])->name('formales');
Route::get('/accesorios', [PaginaController::class, 'accesorios'])->name('accesorios');

// PQRS
Route::post('/pqrs', [PaginaController::class, 'guardarPqrs'])->name('pqrs.guardar');

// Módulo Zapatos
Route::get('/zapatos',   [PaginaController::class, 'zapatos'])->name('zapatos');
Route::post('/zapatos',  [PaginaController::class, 'guardarZapato'])->name('zapatos.guardar');