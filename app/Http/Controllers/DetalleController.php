<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalle = Detalle::all();
        return response()->json($detalle);
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
        $detalle = new Detalle;
        $detalle = $request->Cantidad;
        $detalle = $request->subtotal;
        $detalle = $request->descuento;
        $data =[
            "mensaje" => "detalle creado",
            "detalle" => $detalle   
        ];
        return response->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Detalle $detalle)
    {
        return response->json($detalle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalle $detalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detalle $detalle)
    {
        $detalle->Cantidad = $request->Cantidad;
        $detalle->subtotal = $request->subtotal;
        $detalle->descuento = $request->descuento;
        $detalle->save();
        $data =[
            "mesaje" => "update creado",
            "detalle" => $detalle
        ];
        return response->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalle $detalle)
    {
        $detalle->delete();
        $data =[
            "mesaje" => "detalle eliminada",
            "detalle" => $detalle
        ];
        return response()->json($data);
    }
}
