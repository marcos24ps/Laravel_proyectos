<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'productos';

    public $fillable = [
        'nombre',
        'unidades',
        'precio'
    ];

    protected $casts = [
        'nombre' => 'string',
        'unidades' => 'integer',
        'precio' => 'double'
    ];

    public static array $rules = [
        
    ];

    
}
