<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cardapio;
use Illuminate\Http\Request;

class CardapioController extends Controller
{

    public function index ()
    {
        try {
            $cardapios = Cardapio::all();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $cardapios, 'status' => 200];
    }

    public function show($id)
    {
        try {
            $cardapio = Cardapio::findOrFail($id);
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $cardapio, 'status' => 200];
    }

    public function store(Request $request)
    {
        try {
            $cardapio = new Cardapio();
            $cardapio->nome = $request->nome;
            $cardapio->status = $request->status;
            $cardapio->descricao = $request->descricao;
            $cardapio->save();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Cardapio Cadastrado com Sucesso', 'status' => '201']];
    }

    public function update($id, Request $request)
    {
        try {
            $cardapio = Cardapio::findOrFail($id);
            $cardapio->nome = $request->nome;
            $cardapio->status = $request->status;
            $cardapio->descricao = $request->descricao;
            $cardapio->update();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Cardapio Atualizado com Sucesso', 'status' => '202']];
    }

    public function delete($id)
    {
        try {

            Cardapio::findOrFail($id)->delete();

        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Cardapio Deletado com Sucesso', 'status' => '200']];
    }
}
