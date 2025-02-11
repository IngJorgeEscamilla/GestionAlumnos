<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use App\Models\alumno;
use Livewire\Component;


class ListaAlumnos extends Component
{
    public $id;
    
    public $openModal = false;

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

    #[On('BajaAlumno')]
    public function cargaLista()
    {
        $this->alumnosList = alumno::all();
    }
   
}
