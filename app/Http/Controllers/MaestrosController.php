<?php

namespace App\Http\Controllers;

use App\Models\maestro;
use App\Http\Requests\StoreMaestroRequest;
use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$view = "index";
        //$maestrosList = maestro::all();
        return view('Maestros.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $datos = new maestro();
        return view('Maestros/create', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaestroRequest $request)
    {
        //
        //$nuevoMaestro = $request->validated();
        //maestro::create($nuevoMaestro);
        //return redirect('Maestros.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $maestro = maestro::find($id);
        return view('Maestros.show', compact('maestro'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(maestro $maestro)
    {
     
        return view('Maestros/edit', compact('maestro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, maestro $maestro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(maestro $maestro)
    {
        //
    }
}
