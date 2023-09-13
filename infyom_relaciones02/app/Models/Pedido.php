<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $table = 'pedidos';

    public $fillable = [
        'id_cliente',
        'id_producto'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        
    ];

    public function idCliente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'id_cliente', 'id');
    }

    public function idProducto(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Producto::class, 'id_producto', 'id');
    }
}
