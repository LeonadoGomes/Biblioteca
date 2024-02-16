<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\CadastroController;

Route::get('/', [BibliotecaController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index']);
Route::post('/salvar', [CadastroController::class, 'cadastrar']);
// Route::get('/cadastro/{id}', [CadastroController::class, 'show']);
