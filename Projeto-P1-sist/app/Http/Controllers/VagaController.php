<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Vagas;
use App\Models\Veiculos;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vagas = Vagas::with('clientes')->with('veiculos')->get();
        return view('vagas.index', compact('vagas'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $veiculos = Veiculos::all();
        $clientes = Clientes::all();
        return view('vagas.create', compact('veiculos','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vagas::create($request->all());
        
        return redirect('vagas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vagas = Vagas::with('clientes')->with('veiculos')->findOrFail($id);
        return view('vagas.show', compact('vagas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vagas = Vagas::with('clientes')->with('veiculos')->findOrFail($id);
        $veiculos = Veiculos::all();
        $clientes = Clientes::all();

        return view('vagas.edit', compact('vagas', 'veiculos', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vagas = Vagas::findOrFail($id);
        $vagas->update($request->all());
        
        return redirect()->route('vagas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vagas = Vagas::findOrFail($id);
        $vagas->delete();

        return redirect()->route('vagas.index');
    }
    
}
