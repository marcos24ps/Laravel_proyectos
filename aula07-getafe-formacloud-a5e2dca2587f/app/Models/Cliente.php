<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = 'clientes';

    public $fillable = [
        'email',
        'ciudad',
        'nuevo_cliente'
    ];

    protected $casts = [
        'email' => 'string',
        'ciudad' => 'string',
        'nuevo_cliente' => 'boolean'
    ];

    public static array $rules = [
        
    ];

    
}
