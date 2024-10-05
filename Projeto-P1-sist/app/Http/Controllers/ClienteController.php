<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|id|unique:clientes',
            'nome' => 'required|max:120',
            'telefone' => 'required|max:60'
        ]);

        Clientes::create($request->all());
        
        return redirect()->route('clientes.index')
                        ->with('sucess', 'Cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clientes = Clientes::findOrFail($id);
        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientes = Clientes::findOrFail($id);
        return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:120'. $id,
            'telefone' => 'required|max:60'
        ]);
        $clientes = Clientes::findOrFail($id);
        $clientes->update($request->all());
        
        return redirect()->route('clientes.index')
                        ->with('success', 'Atualizado com sucesso');
    }


    public function delete($id)
    {
        $clientes = Clientes::findOrFail($id);
        return view('clientes.delete', compact('clientes'));

    }
    /**
     * Remove the specified resource from storage. 
     */
    public function destroy(string $id)
    {
        $clientes = Clientes::findOrFail($id);
        $clientes->delete();

        return redirect()->route('clientes.index')
                        ->with('sucess', 'Deletado com sucesso');
    }
        
}
