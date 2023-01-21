<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function index(){
        try{
            $ingredientes = Ingrediente::all();
        }catch(\Exception $e){
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => $ingredientes];
    }

    public function show($id){
        try{
            $ingrediente = Ingrediente::findOrFail($id);
        }catch(\Exception $e){
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }
        
        return ['data' => $ingrediente];
    }

    public function store(Request $request){
        try{
            $ingrediente = new Ingrediente();
            $ingrediente->nome = $request->nome;
            $ingrediente->status = $request->status;

            $ingrediente->save();

        }catch(\Exception $e){
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => ['message' => 'Ingrediente criado com sucesso']];
    }

    public function update(Request $request, $id){
        try{
            $ingrediente = Ingrediente::findOrFail($id);
            $ingrediente->nome = $request->nome;
            $ingrediente->status = $request->status;

            $ingrediente->update();
        }catch(\Exception $e){
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => ['message' => 'Ingrediente atualizado com sucesso']];
    }

    public function delete($id){
        try{
            Ingrediente::findOrFail($id)->delete();
        }catch(\Exception $e){
            return ['data' => ['message' => $e->getMessage(), 'status' => '500']];
        }

        return ['data' => ['message' => 'Ingrediente deletado com sucesso']];
    }
    
}
