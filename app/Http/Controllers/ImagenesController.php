<?php

namespace App\Http\Controllers;

use App\Models\Imagenes;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imagen = Imagenes::all();
        return response()->json($imagen);
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
        $imagen = new Imagen;
        $imagen = $request->imagen;
        $imagen = save();
        $data =[
            "mesaje" => "imagen creada",
            "Imagen" => $imagen
        ];
        return response->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Imagenes $imagenes)
    {
       return response->json($imagen);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imagenes $imagenes)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imagenes $imagenes)
    {
        $imagenes->imagen = $request->imagen;
        $imagenes->save();
        $data =[
            "mesaje" => "update creada",
            "imagen" => $imagenes
        ];
        return response->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imagenes $imagenes)
    {
        $imagenes->delete();
        $data =[
            "mesaje" => "imagen eliminada",
            "image" => $imagenes
        ];
        return response()->json($data);
    }
}
