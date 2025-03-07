<?php

namespace App\Http\Controllers;

use App\Models\grupo;
use Illuminate\Http\Request;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $grupos = grupo::all();
        return view('Grupos/index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('Grupos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $grupo = grupo::find($id);
        return view('Grupos.Show', compact('grupo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grupo $grupo)
    {
        //
        //$grupo = grupo::find($id);
        return view('Grupos.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, grupo $grupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grupo $grupo)
    {
        //
    }
}
