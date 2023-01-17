<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['categoria_id', 'status', 'nome'];

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class, ProdutoIngrediente::class, 'produto_id');
    }

    public function cardapios(){
        return $this->belongsToMany(Cardapio::class, ProdutoCardapio::class, 'produto_id');
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class, ItemPedido::class, 'produto_id')->withPivot(['status', 'observacao']);
    }

    public function precos(){
        return $this->hasMany(Preco::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

}
