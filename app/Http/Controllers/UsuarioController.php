<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::all();
        return response()->json($usuario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario = $request->user;
        $usuario = $request->Email;
        $usuario = $request->password;
        $usuario = $request->image;
        $usuario->save();
        $data =[
            "mesaje" => "usuario creada",
            "usuario" => $usuario
        ];
        return response->json($data);    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
     return response->json($usuario);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->user = $request->user;
        $usuario->Email = $request->Email;
        $usuario->password = $request->password;
        $usuario->image = $request->image;
        $usuario->save();
        $data =[
            "mesaje" => "update creada",
            "usuario" => $usuario
        ];
        return response->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        $data =[
            "mesaje" => "usuario eliminada",
            "usuario" => $usuario
        ];
        return response()->json($data);
    }
}
