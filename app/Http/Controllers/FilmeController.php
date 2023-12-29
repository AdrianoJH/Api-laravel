<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmeController extends Controller
{
    // Listar todos os filmes
    public function index()
    {
        $filmes = Filme::all();
        return response()->json($filmes);
    }

    // Exibir detalhes de um filme
    public function show($id)
    {
        $filme = Filme::find($id);
        return response()->json($filme);
    }

    // Criar um novo filme
    public function store(Request $request)
    {
        $filme = Filme::create($request->all());
        return response()->json($filme, 201);
    }

    // Atualizar informações de um filme
    public function update(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);
        $filme->update($request->all());
        return response()->json($filme, 200);
    }

    // Excluir um filme
    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();
        return response()->json(null, 204);
    }
}
