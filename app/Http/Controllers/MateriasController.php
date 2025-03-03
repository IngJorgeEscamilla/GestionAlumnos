<?php

namespace App\Http\Controllers;

use App\Models\materia;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $view = "index";

        return view('Materias.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            //
        return view('Materias.create');
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
        $materia = materia::find($id);
        return view('Materias/show',compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(materia $materia)
    {
        //
        return view('Materias/edit',compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(materia $materia)
    {
        //
    }
}
