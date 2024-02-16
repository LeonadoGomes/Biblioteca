<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\CadastroController;

Route::get('/', [BibliotecaController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index']);
Route::post('/salvar', [CadastroController::class, 'cadastrar']);
Route::get('/cadastro/edit/{id}', [CadastroController::class, 'edit']);
Route::put('/cadastro/update/{id}', [CadastroController::class, 'update']);
Route::delete('/cadastro/{id}', [CadastroController::class, 'destroy']);
