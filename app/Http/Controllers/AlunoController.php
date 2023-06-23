<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Aluno::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'nota' => 'required',
            'curso' => 'required',
        ]);

        return Aluno::create($request->get());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Aluno::FindOrFail();
    }
}
