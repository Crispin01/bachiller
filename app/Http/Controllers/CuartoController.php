<?php

namespace App\Http\Controllers;

use App\Models\Cuarto;
use Illuminate\Http\Request;

class CuartoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuartos = Cuarto::all();
        return view('cuartos', compact('cuartos'));
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
        Cuarto::create($request->all());
        return redirect()->back()->with('success', 'Cuarto creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_cuarto)
    {
        $cuarto = Cuarto::findOrFail($id_cuarto);
        $cuarto->update($request->all());
        return redirect()->back()->with('success', 'cuarto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_cuarto)
    {
        $cuarto = Cuarto::findOrFail($id_cuarto);
        $cuarto->delete();
        return redirect()->back()->with('success', 'cuarto eliminado correctamente.');
    }
}
