<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\alumno;

class VerAlumno extends Component
{
    public $alumno = [];
    public  $id;
    public $model = [];
    public function render()
    {
        return view('livewire.ver-alumno');
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
