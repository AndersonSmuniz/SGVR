<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{


    public function index ()
    {
        try {
            $conta = Conta::all();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $conta, 'status' => 200];
    }

    public function store(Request $request)
    {
        try {
            $conta = new Conta();

            $conta->reserva_id = $request-> reserva_id;
            $conta->status = $request-> status;
            $conta->valor = $request-> valor;

            $conta-> save();
        }
        catch (\Exception $e){
            return ['data'=>['massage' => $e->getMessage(), 'status'=> '500']];
        }
        return ['data' => ['message' => 'Conta Cadastrada com Sucesso', 'status' => '201']];
    }

    public function show($id)
    {
        try {
            $conta = Conta::findOrFail($id);
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $conta, 'status' => 200];
    }


    public function update($id, Request $request)
    {
        try {
            $conta = Conta::findOrFail($id);
            $conta->reserva_id = $request-> reserva_id;
            $conta->status = $request-> status;
            $conta->valor = $request-> valor;

            $conta->update();
        }
        catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Conta Atualizada com Sucesso', 'status' => '202']];
    }

    public function delete($id)
    {
        try {
            Conta::findOrFail($id)->delete();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Conta Deletada com Sucesso', 'status' => '200']];
    }
}
