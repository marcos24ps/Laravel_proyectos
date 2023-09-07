<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function create(Request $request)
    {
    $this->validate($request, [
    'nombre' => 'required',
    ]);
    Libro::create($request->all());
    return to_route('libros');
    }

    public function delete($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return to_route('libros');
    }
}
