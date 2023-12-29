<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carro;

class CarroController extends Controller
{
    // Listar todos os carros
    public function index()
    {
        $carros = Carro::all();
        return response()->json($carros);
    }

    // Exibir detalhes de um carro
    public function show($id)
    {
        $carro = Carro::find($id);
        return response()->json($carro);
    }

    // Criar um novo carro
    public function store(Request $request)
    {
        $carro = Carro::create($request->all());
        return response()->json($carro, 201);
    }

    // Atualizar informações de um carro
    public function update(Request $request, $id)
    {
        $carro = Carro::findOrFail($id);
        $carro->update($request->all());
        return response()->json($carro, 200);
    }

    // Excluir um carro
    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return response()->json(null, 204);
    }
}
