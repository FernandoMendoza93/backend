<?php

namespace App\Http\Controllers;

use App\Models\Tenis;
use Illuminate\Http\Request;

class TenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tenis::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tallas' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            
         ]);

        $tenis = new Tenis;
        $tenis->nombre = $request->nombre;
        $tenis->descripcion = $request->descripcion;
        $tenis->tallas = $request->tallas;
        $tenis->precio = $request->precio;
        $tenis->stock = $request->stock;
        $tenis->save();

        return $tenis;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tenis = Tenis::find($id);
        return $tenis;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenis $tenis)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'tallas' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            
         ]);

        $tenis->nombre = $request->nombre;
        $tenis->descripcion = $request->descripcion;
        $tenis->tallas = $request->tallas;
        $tenis->precio = $request->precio;
        $tenis->stock = $request->stock;
        $tenis->save();

        return $tenis;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenis $tenis)
    {
        $tenis = Tenis::find($id);

        if(is_null($tenis)){
            return response()->json('No se puede realizar correctamente la operacion', 404);
        }
        $tenis->delete();
        return response()->noContent();
    }
}
