<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\SaveUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Http\Resources\UsuarioResource;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UsuarioResource::collection(Usuario::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUsuarioRequest $request)
    {
        /*Usuario::create($request->all());
        return response()->json([
            "res"=> true,
            "msg"=> "Usuario Guardado Correctamente"
        ], 200);*/

        return new UsuarioResource(Usuario::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        /*return response()->json([
            "res"=> true,
            "Usuario"=> $usuario
        ], 200);*/
        return new UsuarioResource($usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $usuario ->update($request->all());
        /*return response()->json([
            "res" => true,
            "mensaje" => "Usuario actualizado correctamente"
        ], 200);*/
        return new UsuarioResource($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return new UsuarioResource($usuario);
        /*return response()->json([
            "res"=> true,
            "mensaje"=> "Usuario eliminado correctamente"
        ], 200);¨*/
    }
}
