<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class VistasController extends Controller
{
    //

    public function mostrarCancion($id)
    {
        $cancion = Cancion::where('id', $id)->first();
        if($cancion)
        {
            return view('cancion', ['cancion' => $cancion]);
        }
        else{
            return response()->json(['mensaje'=> 'No se encontro la Cancion'],404);
        }
    }
}
