<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function create(Request $request)
    {
    $this->validate($request, [
    'nombre' => 'required',
    ]);
    Producto::create($request->all());
    return redirect('/');
    }

       
}
