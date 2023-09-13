<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = 'clientes';

    public $fillable = [
        'nombre',
        'password'
    ];

    protected $casts = [
        'nombre' => 'string',
        'password' => 'string'
    ];

    public static array $rules = [
        
    ];

    
}
