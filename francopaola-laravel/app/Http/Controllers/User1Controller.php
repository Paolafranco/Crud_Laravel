<?php

namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\Request;
use App\Http\Resources\User1Resouce;
use DB;

class User1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User1::paginate(20);
        return User1Resouce::collection($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $user = new User1();
        $user->nombreUsuario = $request->nombreUsuario;
        $user->nombreCompleto = $request->nombreCompleto;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->edad= $request->edad;
        $user->FechaNacimiento = $request->FechaNacimiento;

        if($user->save()){
            return new User1Resouce($user);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User1  $user1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User1::findOrFail($id);
        return new User1Resouce($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User1  $user1
     * @return \Illuminate\Http\Response
     */
    public function edit(User1 $user1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User1  $user1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user = User1::findOrFail($id);
        $user->nombreUsuario = $request->nombreUsuario;
        $user->nombreCompleto = $request->nombreCompleto;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->edad= $request->edad;
        $user->FechaNacimiento= $request->FechaNacimiento;
        if($user->save()){
            return new User1Resouce($user);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User1  $user1
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User1::findOrFail($id);
        if($user->delete()){
            return new User1Resouce($user);
        }
    }
}
