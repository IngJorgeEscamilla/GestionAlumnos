<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use Illuminate\Http\Request;
use App\Models\alumno;



class AlumnosController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $view = 'index';
        return view('Alumnos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $datos = new alumno();
        return view('Alumnos/create', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        //
        $nuevoAlumno = $request->validated();
        alumno::create($nuevoAlumno);
        return redirect('Alumnos/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $alumno = alumno::find($id);
        return view('Alumnos/show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $alumno = alumno::find($id);
        return view('Alumnos/edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAlumnoRequest $request, string $id)
    {
        //
        $infoAlumno = $request->validated();
        $alumno = alumno::find($id);
        $alumno->update($infoAlumno);
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $alumno = alumno::find($id)->delete();
        return redirect()->route('Alumnos/index');
    }
}
