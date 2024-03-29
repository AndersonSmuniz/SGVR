<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preco extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',
        'numeros_pessoas',
        'valor',
    ];

    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
