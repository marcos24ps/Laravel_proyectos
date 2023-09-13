<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $table = 'pedidos';

    public $fillable = [
        'fecha',
        'id_cliente',
        'id_producto'
    ];

    protected $casts = [
        'fecha' => 'date'
    ];

    public static array $rules = [
        
    ];

    public function idCliente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'id_cliente', 'id');
    }
}
