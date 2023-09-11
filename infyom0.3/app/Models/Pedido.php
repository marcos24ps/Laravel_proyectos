<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $table = 'pedidos';

    public $fillable = [
        'fecha',
        'unidades'
    ];

    protected $casts = [
        'fecha' => 'date',
        'unidades' => 'integer'
    ];

    public static array $rules = [
        
    ];

    
}
