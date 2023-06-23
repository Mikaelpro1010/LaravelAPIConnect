<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index() //lista as informações de todos os dados da tabela
    {
        return Aluno::all();
    }

    public function store(Request $request) //envia  os dados para serem armazenados no banco de dados
    {
        $request->validate([
            'nome' => 'required',
            'nota' => 'required',
            'curso' => 'required',
        ]);

        return Aluno::create($request->all());
    }

    public function show($id) //pesquisa dos dados do aluno pelo seu respectivo id
    {
        return Aluno::FindOrFail();
    }
}
