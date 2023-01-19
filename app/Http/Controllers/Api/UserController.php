<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index ()
    {
        try {
            $users = User::all();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $users, 'status' => 200];
    }

    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $user, 'status' => 200];
    }

    public function store(Request $request)
    {
        try {
            $user = new User();
            $user->nome = $request->nome;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->tipo_usuario_id = $request->tipo_usuario_id;
            $user->telefone = $request->telefone;
            $user->cpf = $request->cpf;

            $user->save();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Usuário Cadastrado com Sucesso', 'status' => '201']];
    }

    public function update($id, Request $request)
    {
        try {
            $user = User::findOrFail($id);
            $user->nome = $request->nome;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->tipo_usuario_id = $request->tipo_usuario_id;
            $user->telefone = $request->telefone;
            $user->cpf = $request->cpf;

            $user->update();
        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Usuario Atualizado com Sucesso', 'status' => '202']];
    }

    public function delete($id)
    {
        try {

            User::findOrFail($id)->delete();

        } catch (\Exception $e)
        {
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        return ['data' => ['message' => 'Usuario Deletado com Sucesso', 'status' => '200']];
    }
}
