<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['reserva_id', 'horario'];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, ItemPedido::class, 'pedido_id')->withPivot(['status', 'observacao']);
    }

}
