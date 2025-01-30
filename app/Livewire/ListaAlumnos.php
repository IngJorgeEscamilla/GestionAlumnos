<?php

namespace App\Livewire;

use App\Models\alumno;
use Livewire\Component;


class ListaAlumnos extends Component
{
    
    public $Lista ;

    public $alumnosList=[];

    public function mount()
    {
        $this->cargaLista();
    }

    public function render()
    {

        return view('livewire.lista-alumnos');
    }

    public function cargaLista()
    {
        $this->alumnosList = alumno::all();
    }

}
