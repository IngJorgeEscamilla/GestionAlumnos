<?php

namespace App\Livewire\Grupos;

use Livewire\Component;
use App\Models\grupo;
use App\Models\alumno;

class ShowGrupo extends Component
{

    public $id;
    public $grupo;
    public $ListAlumno = [];
    public $alumno;

    public function render()
    {
        return view('livewire.grupos.show-grupo');
    }
    public function mount()
    {
        $this->ShowGrupo();
        $this->cargarAlumnos();
    }

    public function cargarAlumnos()
    {
        $this->ListAlumno = alumno::whereNull('grupo_id')->get();
    }

    public function ShowGrupo()
    {
        $this->grupo = grupo::find($this->id);
    }

    public function findAlumno()
    {
        $this->alumno = alumno::find($this->id);
        if( $this->alumno != null)
        {
            $getalumno = ['nombre'=>$this->alumno->nombre,
                        'apellido'=>$this->alumno->apellido,
                        'semestre'=>$this->alumno->semestre,
                        'grupo_id'=>$this->alumno->apellido,];
    
        }
    }
    
    public function updateGrupoId()
    {

    }
}
