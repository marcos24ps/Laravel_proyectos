<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
        'nombre' => 'required',
        'fecha_entrada'=> 'required',
        'fecha_salida'=> 'required',
        'numero_personas'=> 'required',
    ]);

    Reserva::create($request->all());
    return redirect('/mostrar');
    }
}
