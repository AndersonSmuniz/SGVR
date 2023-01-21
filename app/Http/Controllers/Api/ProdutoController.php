<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index ()
    {
        try {
            $produtos = Produto::all();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $produtos, 'status' => 200];
    }

    public function show($id)
    {
        try {
            $produto = Produto::findOrFail($id);
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $produto, 'status' => 200];
    }

    public function store(Request $request)
    {
        try {
            $produto = new Produto();
            $produto->categoria_id = $request->categoria_id;
            $produto->status = $request->status;
            $produto->nome = $request->nome;
            $produto->save();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Produto Cadastrado com Sucesso', 'status' => '201']];
    }

    public function update($id, Request $request)
    {
        try {
            $produto = Produto::findOrFail($id);
            $produto->nome = $request-> nome;
            $produto->status = $request-> status;
            $produto->categoria_id = $request-> categoria_id;

            $produto->update();
        } catch (\Exception $e)
        {  return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Produto Atualizado com Sucesso', 'status' => '202']];
    }
    public function delete($id)
    {
        try {
            Produto::findOrFail($id)->delete();
        } catch (\Exception $e) {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Produto Deletado com Sucesso', 'status' => '200']];
    }
}
