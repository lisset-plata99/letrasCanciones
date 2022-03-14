<?php

namespace App\Http\Controllers;

use App\Http\Resources\CancionResource;
use App\Models\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $canciones = Cancion::paginate(100);
        return CancionResource::collection($canciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $canciones = new Cancion();
        $canciones->id = $request->id;
        $canciones->cantante = $request->cantante;
        $canciones->nombrecancion = $request->nombrecancion;
        $canciones->letra = $request->letra;
        if($canciones->save())
        {
            return new CancionResource($canciones);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $canciones = Cancion::findOrFail($id);
        return new CancionResource($canciones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $canciones = Cancion::findOrFail($id);
        $canciones->cantante = $request->cantante;
        $canciones->nombrecancion = $request->nombrecancion;
        $canciones->letra = $request->letra;
        if($canciones->save())
        {
            return new CancionResource($canciones);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $canciones = Cancion::findOrFail($id);
        if($canciones->delete())
        {
            return new CancionResource($canciones);
        }
    }
}
