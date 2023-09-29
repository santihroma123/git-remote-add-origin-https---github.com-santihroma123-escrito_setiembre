<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Throwable;

class TareaController extends Controller
{
    public function listarTareas(Request $Request){
        try {
            return Tarea::all();
        }
        catch (Throwable $th) {
            return response(['message' => 'Something Went Wrong'],404);
        }
    }

       public function listarTarea(Request $Request, $IdTarea){
        try {
            return Tarea::findOrFail($IdTarea);
        }
        catch (Throwable $th) {
            return response(['message' => 'Something Went Wrong'],404);
        }
    }

    public function borrarTarea(Request $Request, $IdTarea){
        try {
            $Tarea = Tarea::findOrFail($IdTarea);

            $Tarea -> delete();

            return $Tarea;
        }
        catch (Throwable $th) {
            return response(['message' => 'Something Went Wrong'],404);
        }

    }
    public function modificarTarea(Request $Request, $IdTarea){
        try {
            $Tarea = Tarea::findOrFail($IdTarea);

            $Tarea -> titulo = $Request->post('titulo');
            $Tarea -> contenido = $Request->post('contenido');
            $Tarea -> estado = $Request->post('estado');
            $Tarea -> autor = $Request->post('autor');

            $Tarea -> save();

            return $Tarea;
        }
        catch (Throwable $th) {
            return response(['message' => 'Something Went Wrong'],404);
        }
    }

    public function crearTarea(Request $Request){
        try {
            $Tarea = new Tarea();

            $Tarea -> titulo = $Request->post('titulo');
            $Tarea -> contenido = $Request->post('contenido');
            $Tarea -> estado = $Request->post('estado');
            $Tarea -> autor = $Request->post('autor');

            $Tarea -> save();

            return $Tarea;
        }
        catch (Throwable $th) {
            return response(['message' => 'Something Went Wrong'],404);
        }
    }
}
