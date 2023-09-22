<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $roles = Roles::all();
        return response()->json($roles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles = new Roles;
        $roles = $request->nombre_rol;
        $roles = $request->enable;
        $roles->save();
        $data =[
            "mesaje" => "roles creada",
            "roles" => $roles
        ];
        return response->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Roles $roles)
    {
        return response->json($roles);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roles $roles)
    {
        $roles->nombre_rol = $request->nombre_rol;
        $roles->enable = $request->enable;
        $roles->save();
        $data =[
            "mesaje" => "update creada",
            "categoria" => $roles
        ];
        return response->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roles $roles)
    {
        $roles->delete();
        $data =[
            "mesaje" => "roles eliminada",
            "roles" => $roles
        ];
        return response()->json($data);
    }
}
