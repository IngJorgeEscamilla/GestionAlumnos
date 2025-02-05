<?php

namespace App\Livewire;

use App\Models\maestro;
use Livewire\Component;

class CreateMaestro extends Component
{
    public $maestro;

    public $model=[];

    protected function rules()
    {
        return  [
            'model.nombre' => 'required|min:2|max:20',
            'model.apellido'=>'required|min:2|max:20',
            'model.matricula'=>'required|min:8|max:8',
            'model.email'=>'required|email',
            'model.telefono'=>'required|min:10|max:10',
            ];
    }
    public function messages()
    {
        return [
            'model.nombre.required' => 'El campo nombre se encuentra vacio',
            'model.nombre.min' =>'La longitud del campo debe ser minima de 2 caracteres',
            'model.nombre.max' =>'La longitud del campo debe ser maxima de 20 caraceteres',
            'model.apellido.required' => 'El campo apellido se encuentra vacio',
            'model.apellido.min' =>'La longitud del campo debe ser minima de 2 caracteres',
            'model.apellido.max' =>'La longitud del campo debe ser maxima de 20 caraceteres',
            'model.matricula.required' => 'El campo matricula se encuentra vacio',
            'model.matricula.min' => 'La longitud del campo debe ser minima de 8 caracteres',
            'model.matricula.max' => 'La longitud del campo debe ser maxima de 8 caracteres',
            'model.email.required' => 'El campo email se encuentra vacio',
            'model.email.email' => 'El correo electronico no es valido',
            'model.telefono' => 'El campo telefono se encuetra vacio',
            'model.telefono.min' => 'El número telefónico no es valido',
            'model.telefono.max' => 'El número telefónico no es valido',
        ];
    }

    public $iniciado = false;

    //public $correo='@test.com';

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
            $this->model=['nombre'=>'','apellido'=>'','matricula'=>'','email'=>'','telefono'=>'',];
            //$this->nombre ='tiburcio';
            $this->iniciado = true;
        }
        //dd($this->iniciado);
        
    }
    public function guardar(){
        //$this->model['email']=$this->model['nombre'].$this->correo;
        //$nuevo = new maestro();
        $validated = $this->validate()['model'];
        $this->maestro = new maestro();
        $this->maestro->nombre=($validated['nombre']);
        $this->maestro->apellido=($validated['apellido']);
        $this->maestro->matricula=($validated['matricula']);
        $this->maestro->email=($validated['email']);
        $this->maestro->telefono=($validated['telefono']);
        $this->model = $this->maestro->save();
        $this->iniciado = false;
        return redirect()->route(("maestros.index"));
    }
    
}