<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/alunos', [AlunoController::class, 'index']); //rota de listagem dos dados na tabela
Route::post('/alunos', [AlunoController::class, 'store']); //rota que envia os dados para o banco de dados
Route::get('/alunos/{id}', [AlunoController::class, 'show']); //rota para pesquisar os dados do aluno pelo seu respectivo id

