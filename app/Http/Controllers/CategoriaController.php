<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = categoria::all();
        return response()->json($categoria);
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
        $categoria = new Categoria;
        $categoria = $request->NombreCategoria;
        $categoria = $request->enable;
        $categoria->save();
        $data =[
            "mesaje" => "categoria creada",
            "categoria" => $categoria
        ];
        return response->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        return response->json($categoria);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria $categoria)
    {
        
        $categoria->NombreCategoria = $request->NombreCategoria;
        $categoria->enable = $request->enable;
        $categoria->save();
        $data =[
            "mesaje" => "update creada",
            "categoria" => $categoria
        ];
        return response->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        $categoria->delete();
        $data =[
            "mesaje" => "categoria eliminada",
            "categoria" => $categoria
        ];
        return response()->json($data);
    }
}
