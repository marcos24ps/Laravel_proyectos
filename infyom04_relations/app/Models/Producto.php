<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'productos';

    public $fillable = [
        'nombre',
        'precio',
        'unidades'
    ];

    protected $casts = [
        'nombre' => 'string',
        'precio' => 'double',
        'unidades' => 'integer'
    ];

    public static array $rules = [
        
    ];

    
}
