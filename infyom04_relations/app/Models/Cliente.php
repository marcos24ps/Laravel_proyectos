<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = 'clientes';

    public $fillable = [
        'nombre',
        'ciudad'
    ];

    protected $casts = [
        'nombre' => 'string',
        'ciudad' => 'string'
    ];

    public static array $rules = [
        
    ];

    
}
