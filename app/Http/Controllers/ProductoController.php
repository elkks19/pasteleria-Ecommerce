<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return inertia('Productos/Index')->with([
            'productos' => $productos
        ]);
    }

    public function create()
    {
        return inertia('Productos/Create');
    }

    public function store(StoreProductoRequest $request)
    {
        //
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit(Producto $producto)
    {
        //
    }

    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        //
    }

    public function destroy(Producto $producto)
    {
        //
    }
}
