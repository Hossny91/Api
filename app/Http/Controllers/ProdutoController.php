<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = Produto::all();
        return response()->json($produto);
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
        $produto = new Produto;
        $produto = $request->Product;
        $produto = $request->Price;
        $produto = $request->description;
        $produto = $request->Stock;
        $produto = save();
        $data =[
            "mesaje" => "producto creado",
            "producto" => $produto
        ];
        return response->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return response->json($produto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->product = $request->product;
        $produto->Price = $request->Price;
        $produto->description = $request->description;
        $produto->Stock = $request->Stock;
        $produto->save();
        $data =[
            "mesaje" => "update creada",
            "categoria" => $categoria
        ];
        return response->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        $data =[
            "mesaje" => "produto eliminada",
            "produto" => $produto
        ];
        return response()->json($data);
    }
}
