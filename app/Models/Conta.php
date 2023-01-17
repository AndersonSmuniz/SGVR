<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;
    protected $fillable = [
        'reserva_id',
        'status',
        'valor',
    ];

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }
}
