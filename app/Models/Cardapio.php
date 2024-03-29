<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'status',
        'descricao',
    ];

    public function produtos(){
        return $this->belongsToMany(Produto::class, ProdutoCardapio::class, 'cardapio_id');
    }

}
