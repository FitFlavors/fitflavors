<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::query()->get();
        
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'producto' => 'required|string',
            'precio' => 'required|numeric',
            'proveedor' => 'string|nullable',
            'descripcion' => 'required|string',
            'ingredientes' => 'required|string',
            'disponible' => 'required|integer',
        ]);

        $producto = Producto::create([
            'producto' => $request->producto,
            'precio' => $request->precio,
            'proveedor' => $request->proveedor,
            'descripcion' => $request->descripcion,
            'ingredientes' => $request->ingredientes,
            'disponible' => $request->disponible,
        ]);

        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->producto = $request->producto;
        $producto->precio = $request->precio;
        $producto->proveedor = $request->proveedor;
        $producto->descripcion = $request->descripcion;
        $producto->ingredientes = $request->ingredientes;
        $producto->disponible = $request->disponible;

        $producto->save();

        return redirect()->route('productos.show', compact('producto'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
