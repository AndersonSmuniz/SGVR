<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index ()
    {
        try {
            $categorias = Categoria::all();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $categorias];
    }

    public function show($id)
    {
        try {
            $categoria = Categoria::findOrFail($id);
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $categoria, 'status' => 200];
    }

    public function store(Request $request)
    {
        try {
            Categoria::create($request->all());
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Categoria Cadastrada com Sucesso', 'status' => '201']];
    }

    public function update($id, Request $request)
    {
        try {
            $categoria = Categoria::findOrFail($id);
            $categoria->update($request->all());
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Categoria Atualizada com Sucesso', 'status' => '202']];
    }

    public function delete($id)
    {
        try {

            Categoria::findOrFail($id)->delete();

        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Categoria Deletada com Sucesso', 'status' => '200']];
    }

}
