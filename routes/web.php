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

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');

Route::get('/menu', [PaginaController::class, 'menu'])->name('menu');

Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');

Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');

Route::post('/pqrs', [PqrsController::class, 'store'])->name('pqrs.store');

Route::get('/deportivos', function () {
    return view('deportivos');
})->name('deportivos');

Route::get('/zapatos', function () {
    return view('zapatos');
})->name('zapatos');

Route::get('/formales', function () {
    return view('formales');
})->name('formales');

Route::get('/accis', function () {
    return view('accis');
})->name('accis');

/************************************************************/
Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');

Route::get('/menu', [PaginaController::class, 'menu'])->name('menu');

Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');

Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');

Route::get('/formales', [PaginaController::class, 'formales'])->name('formales');

Route::get('/deportivos', [PaginaController::class, 'deportivos'])->name('deportivos');

Route::get('/accis', [PaginaController::class, 'accis'])->name('accis');

Route::get('/zapatos', [PaginaController::class, 'zapatos'])->name('zapatos');
/***********************************************************/ 

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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mensajes', [PqrsController::class, 'index'])->name('mensajes');
    Route::get('/mensajes/{id}/editar', [PqrsController::class, 'edit'])->name('mensajes.edit');
    Route::put('/mensajes/{id}', [PqrsController::class, 'update'])->name('mensajes.update');
    Route::delete('/mensajes/{id}', [PqrsController::class, 'destroy'])->name('mensajes.destroy');

});

require __DIR__.'/auth.php';