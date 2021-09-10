<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;
use App\Http\Requests\SaveEntrenadorRequest;
use App\Http\Requests\UpdateEntrenadorRequest;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Entrenador::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveEntrenadorRequest $request)
    {
        Entrenador::create($request->all());
        return response()->json([
            "res"=> true,
            "msg"=> "Entrenador Guardado Correctamente"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function show(Entrenador $entrenador)
    {
        return response()->json([
            "res"=> true,
            "Entrenador"=> $entrenador
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntrenadorRequest $request, Entrenador $entrenador)
    {
        $entrenador ->update($request->all());
        return response()->json([
            "res" => true,
            "mensaje" => "Entrenador actualizado correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenador $entrenador)
    {
        $entrenador->delete();
        return response()->json([
            "res"=> true,
            "mensaje"=> "Entrenador eliminado correctamente"
        ], 200);
    }
}
