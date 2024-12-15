<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Cuarto;
use App\Models\Inquilino;
use App\Models\Relacion_cuarto_alquiler;
use App\Models\Relacion_inquilino_alquiler;
use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuartos = Cuarto::all();
        $inquilinos = Inquilino::all();
        $alquileres = Alquiler::all();
        return view('alquileres', compact('alquileres', 'inquilinos', 'cuartos'));
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
        $data = $request->all();
        $alquiler = Alquiler::create([
            'nombre_inquilino' => $data['nombre_inquilino'],
            'nombre_cuarto' => $data['nombre_cuarto'],
            'fecha_inicio' => $data['fecha_inicio'],
            'fecha_fin' => $data['fecha_fin'],
        ]);

        Relacion_inquilino_alquiler::create([
            'id_inquilino' => $data['nombre_inquilino'],
            'id_alquiler' => $alquiler->id_alquiler,
        ]);

        Relacion_cuarto_alquiler::create([
            'id_cuarto' => $data['nombre_cuarto'],
            'id_alquiler' => $alquiler->id_alquiler,
        ]);
        return redirect()->back()->with('success', 'Alquiler creado correctamente.');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_alquiler)
    {
        $alquiler = Alquiler::findOrFail($id_alquiler);
        $alquiler->delete();
        return redirect()->back()->with('success', 'cuarto eliminado correctamente.');
    }
}
