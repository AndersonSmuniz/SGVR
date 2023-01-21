<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller {

    public function index()
    {
        try {
            $mesas = Mesa::all();
        }
        catch (\Exception $e) {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => $mesas, 'status' => 200];
    }

    public function show($id)
    {
        try {
            $mesas = Mesa::findOrFail($id);
        } catch (\Exception $e) {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => $mesas, 'status' => 200];
    }

    public function store(Request $request)
    {
        try {
            $mesas = new Mesa();
            $mesas->numero = $request->numero;
            $mesas->ocupada = $request->ocupada;
            $mesas->save();
        } catch (\Exception $e) {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Mesa Cadastrada com Sucesso', 'status' => '201']];
    }

    public function update($id, Request $request)
    {
        try {
            $mesas = Mesa::findOrFail($id);
            $mesas->numero = $request->numero;
            $mesas->ocupada = $request->ocupada;

            $mesas->update();
        } catch (\Exception $e) {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Mesa Atualizada com Sucesso', 'status' => '202']];
    }
    public function delete($id)
    {
        try {
            Mesa::findOrFail($id)->delete();
        } catch (\Exception $e) {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Mesa Deletada com Sucesso', 'status' => '200']];
    }
}

