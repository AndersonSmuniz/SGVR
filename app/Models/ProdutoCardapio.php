<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCardapio extends Model
{
    use HasFactory;
     protected $fillable = [
         'cardapio_id',
         'prodito_id',
     ];
}
