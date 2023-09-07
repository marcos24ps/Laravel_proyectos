<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TareaController extends Controller
{
    public function create(Request $request){
        
        $this->validate($request, [
            'nombre' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'asignado_a' => 'required',
            ]);
            Tarea::create($request->all());
            //return to_route('index');
    }

    public function delete($id)
    {
        $tarea = Tarea::find($id);
        $tarea->delete();
        //return to_route('index');
    }

}
