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
            return redirect('/');
    }

    public function delete($id)
    {
        $tarea = Tarea::find($id);
        $tarea->delete();
        return redirect('/');
    }

    public function añadirTareas(Request $request) 
    { 
        $request->validate([ 'nombre' => 'required|string', 'fecha_inicio' => 'required|date', 'fecha_fin' => 'required|date|after_or_equal:fecha_inicio', 'asignado_a' => 'required|string', ]); $tarea = new Tarea(); $tarea->nombre = $request->nombre; $tarea->fecha_inicio = $request->fecha_inicio; $tarea->fecha_fin = $request->fecha_fin; $tarea->asignado_a = $request->asignado_a; $tarea->save(); return redirect()->route('nombre_de_la_ruta')->with('success', 'Tarea añadida exitosamente.'); 
    }



}
