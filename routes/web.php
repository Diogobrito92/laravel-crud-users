<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página inicial -> redireciona para usuários
Route::get('/', function () {
    return redirect()->route('users.index');
});

// Dashboard (opcional - pode manter)
Route::get('/dashboard', function () {
    return redirect()->route('users.index');
})->middleware(['auth', 'verified'])->name('dashboard');


// ROTAS PROTEGIDAS
Route::middleware('auth')->group(function () {

    // CRUD de usuários
    Route::resource('users', UserController::class);

    // Perfil (do Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Rotas de autenticação (login, register, etc)
require __DIR__.'/auth.php';