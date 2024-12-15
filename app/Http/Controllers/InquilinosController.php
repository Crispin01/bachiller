<?php

namespace App\Http\Controllers;

use App\Models\Inquilino;
use Illuminate\Http\Request;

class InquilinosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inquilinos = Inquilino::all();
        return view('inquilinos', compact('inquilinos'));
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
        Inquilino::create($request->all());
        return redirect()->back()->with('success', 'Inquilino creado correctamente.');
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
    public function edit(string $id_inquilino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_inquilino)
    {
        $inquilino = Inquilino::findOrFail($id_inquilino);
        $inquilino->update($request->all());
        return redirect()->back()->with('success', 'Inquilino actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_inquilino)
    {
        $inquilino = Inquilino::findOrFail($id_inquilino);
        $inquilino->delete();
        return redirect()->back()->with('success', 'Inquilino eliminado correctamente.');
    }
}
