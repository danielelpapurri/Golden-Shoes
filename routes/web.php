```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rutas públicas
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



/*
|--------------------------------------------------------------------------
| Dashboard protegido
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Rutas protegidas
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Perfil usuario
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | Mensajes PQRS
    |--------------------------------------------------------------------------
    */

    Route::get('/mensajes', [PqrsController::class, 'index'])->name('mensajes');

    Route::get('/mensajes/{id}/editar', [PqrsController::class, 'edit'])->name('mensajes.edit');

    Route::put('/mensajes/{id}', [PqrsController::class, 'update'])->name('mensajes.update');

    Route::delete('/mensajes/{id}', [PqrsController::class, 'destroy'])->name('mensajes.destroy');

});

/*
|--------------------------------------------------------------------------
| Auth Breeze
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
