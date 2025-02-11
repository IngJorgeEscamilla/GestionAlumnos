<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use App\Models\alumno;
use App\Models\maestro;
use Livewire\Component;

class EliminarDatos extends Component
{
    
    public $Salumno;

    public $id;
    public $value;
    
    public $role;

    public function render()
    {
        return view('livewire.eliminar-datos');
    }

    public function printvalue($id)
    {
        $this->value = alumno::find($id);
        if($this->value != null);
        {
            dd($this->value);
        }
    }

    //#[On('BajaAlumno')]
    public function eliminarAlumno()
    {
        $alumno = alumno::find($this->id);
        //dd($this->id);
        if($alumno != null)
        {
            $eliminado =
            $alumno->delete();
            $this->dispatch('BajaAlumno', eliminar:$eliminado );
            //dd('funciona');
            //return ($eliminado);
        }
    }


    
    public function cargarAlumno($id)
    {
        $alumno = alumno::find($id);
        if ($alumno != null)
        {
            $this->Salumno = ['nombre' =>$alumno->nombre,
                              'matricula'=>$alumno->matricula,
                              'semestre'=>$alumno->semestre,
                              'email'=>$alumno->email,
                              'telefono'=>$alumno->telefono,];
        }
    }

}
