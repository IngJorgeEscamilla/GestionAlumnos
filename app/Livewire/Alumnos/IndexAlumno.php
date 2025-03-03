<?php

namespace App\Livewire\Alumnos;

use Livewire\Component;
use App\Models\alumno;
use Livewire\Attributes\On;

class IndexAlumno extends Component
{
    public $id;
    
    public $alumnosList=[];

    public function render()
    {
        $this->cargaLista();
        return view('livewire.alumnos.index-alumno');
    }

    public function deleteAlumno(alumno $alumno)
    {
        $alumno->delete();
        //return redirect()->to(route("alumnos.index"));
    }

    #[On('BajaAlumno')]
    public function cargaLista()
    {
        $this->alumnosList = alumno::all();
    }
}
