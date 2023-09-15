<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $table = 'pedidos';

    public $fillable = [
        'fecha_pedido',
        'unidades',
        'idcliente',
        'idproducto'
    ];

    protected $casts = [
        'fecha_pedido' => 'date',
        'unidades' => 'integer'
    ];

    public static array $rules = [
        
    ];

    public function idcliente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'idcliente', 'id');
    }

    public function idproducto(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Producto::class, 'idproducto', 'id');
    }
}
