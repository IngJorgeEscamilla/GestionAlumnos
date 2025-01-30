<?php

namespace App\Livewire;

use App\Models\maestro;
use Livewire\Component;

class CreateMaestro extends Component
{
    public $maestro;

    public $model=[];

    public $iniciado = false;

    public $correo='@test.com';

    public function render()
    {
        $this->cargarForm();
        return view('livewire.create-maestro');
    }
    
    public function recargar(){
        $this->iniciado = false;
        $this->cargarForm();
    }

    public function cargarForm(){
        if (!$this->iniciado){
            $this->maestro = new maestro();
            $this->model=['nombre'=>'','matricula'=>'','email'=>'','telefono'=>'',];
            //$this->nombre ='tiburcio';
            $this->iniciado = true;
        }
        //dd($this->iniciado);
        
    }
    public function guardar(){
        $this->model['email']=$this->model['nombre'].$this->correo;
        //$nuevo = new maestro();
        $validated = $this->validate([
            'model.nombre'=>'nullable',
            'model.matricula'=>'nullable|digits:8',
            'model.email'=>'nullable|email',
            'model.telefono'=>'nullable|digits:10',
        ]);
        maestro::create($this->model);
        $this->iniciado = false;
    }
    
}