<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = 'clientes';

    public $fillable = [
        'nombre',
        'apellido'
    ];

    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required',
        'apellido' => 'required'
    ];

    
}
