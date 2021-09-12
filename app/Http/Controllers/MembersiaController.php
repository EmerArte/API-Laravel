<?php

namespace App\Http\Controllers;

use App\Models\Membersia;
use Illuminate\Http\Request;
use App\Http\Requests\SaveMembersiaRequest;
use App\Http\Requests\UpdateMembersiaRequest;

class MembersiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Membersia::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveMembersiaRequest $request)
    {
        Membersia::create($request->all());
        return response()->json([
            "res"=> true,
            "msg"=> "Membersia Guardada Correctamente"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membersia  $membersia
     * @return \Illuminate\Http\Response
     */
    public function show(Membersia $membersia)
    {
        return response()->json([
            "res"=> true,
            "Membersia"=> $membersia
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membersia  $membersia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembersiaRequest $request, Membersia $membersia)
    {
        $membersia ->update($request->all());
        return response()->json([
            "res" => true,
            "mensaje" => "Membersia actualizada correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membersia  $membersia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membersia $membersia)
    {
        $membersia->delete();
        return response()->json([
            "res"=> true,
            "mensaje"=> "Membersia eliminado correctamente"
        ], 200);
    }
}
