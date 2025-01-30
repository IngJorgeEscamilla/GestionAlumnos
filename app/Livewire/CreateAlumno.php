<?php

namespace App\Livewire;

use App\Models\alumno;
use Livewire\Component;

class CreateAlumno extends Component
{
public $alumno;

public $model=[];

public $correo ='@test.com';

public $vista = false;


    public function render()
    {
        $this->cargaForm();
        return view('livewire.create-alumno');
    }

    public function recargar(){
        $this->vista = false;
        $this->cargarForm();
    }

    public function cargaForm()
    {
        if(!$this->vista){
            $this->alumno = new alumno();
            $this->model = ['nombre'=>'','matricula'=>'','semestre'=>'','email'=>'','telefono'=>'',];
            $this->vista = true;
        }
    }

    public function guardar()
    {
        $this->model['email'] = $this->model['nombre'].'.'.$this->model['matricula'].$this->correo;
        $validated = $this->validate([
            'model.nombre'=>'nullable',
            'model.matricula'=>'nullable|digits:8',
            'model.email'=>'nullable|email',
            'model.telefono'=>'nullable|digits:10',
        ]);
        alumno::create($this->model);
        $this->vista = false;
    }
    public function cargaAlumno($id)
    {
        $alumno = alumno::find($id);
        if($alumno != null)
        {
            $this->model = ['nombre' =>$alumno->nombre,
                            'matricula'=>$alumno->matricula,
                            'semestre'=>$alumno->semestre,
                            'email'=>$alumno->email,
                            'telefono'=>$alumno->telefono,];
        }

    } 
    public function eliminar($id)
    {
        $alumno = alumno::find($id);
        if($alumno != null)
        {
            $eliminado =
            $alumno->delete();
            $this->dispatch('');
            //return ($eliminado);
        }
    }

}