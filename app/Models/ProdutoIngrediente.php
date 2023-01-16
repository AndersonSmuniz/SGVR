<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoIngrediente extends Model
{
    use HasFactory;

    protected $fillable = ['ingrediente_id', 'produto_id'];
}
