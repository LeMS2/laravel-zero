<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

/*
|--------------------------------------------------------------------------
| Rotas públicas
|--------------------------------------------------------------------------
*/

// página inicial (se tiver)
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Rotas protegidas (somente logado)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // LISTAR
    Route::get('/usuarios', [UserProfileController::class, 'index']);

    // FORM DE CRIAÇÃO
    Route::get('/usuarios/criar', [UserProfileController::class, 'create']);

    // SALVAR
    Route::post('/usuarios', [UserProfileController::class, 'store']);

    // FORM DE EDIÇÃO
    Route::get('/usuarios/{id}/editar', [UserProfileController::class, 'edit']);

    // ATUALIZAR
    Route::put('/usuarios/{id}', [UserProfileController::class, 'update']);

    // EXCLUIR
    Route::delete('/usuarios/{id}', [UserProfileController::class, 'destroy']);
});

Route::get('/dashboard', function () {
    return redirect('/usuarios');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Rotas de autenticação
|--------------------------------------------------------------------------
|
| Essas são criadas automaticamente pelo Breeze
|
*/
require __DIR__.'/auth.php';