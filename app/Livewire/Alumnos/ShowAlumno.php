<?php

namespace App\Livewire\Alumnos;

use App\Models\alumno;
use Livewire\Component;

class ShowAlumno extends Component
{
    public $alumno = [];
    public  $id;
    public $model = [];
    public function render()
    {
        return view('livewire.alumnos.show-alumno');
    }
    public function mount(alumno $alumno)
    {  
        $this->verAlumno();
        //$this->alumno = $alumno;
    }

    public function verAlumno()
    {
        $this->alumno = alumno::find($this->id);
    }
}
