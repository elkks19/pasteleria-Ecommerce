<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Inertia\Response;

class ClienteController extends Controller
{
    public function index(): Response
    {
        $clientes = Cliente::all();

        return inertia('Clientes/Index')->with([
            'clientes' => $clientes
        ]);
    }

    public function create()
    {
        return inertia('Clientes/Create');
    }

    public function store(ClienteRequest $request): JsonResponse
    {
        $cliente = Cliente::create($request->validated());
        return response()->json([
            $cliente,
            'message' => 'cliente creado correctamente'
        ], 201);
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(Cliente $cliente)
    {
        //
    }

    public function update(ClienteRequest $request, Cliente $cliente)
    {
        //
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json([
            'message' => 'Cliente eliminado correctamente'
        ], 201);
    }
}
