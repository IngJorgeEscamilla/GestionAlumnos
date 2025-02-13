<?php

namespace App\Livewire;

use App\Models\maestro;
use Livewire\Component;

class ActualizarMaestros extends Component
{
    
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

    public $maestro;
    public $model=[];
    public $getMaestro;
    public $id;


    public function render()
    {

        return view('livewire.actualizar-maestros');
    }

    public function mount()
    {
        $this->findMaestro();
        $this->model = $this->getMaestro;
    }

    public function findMaestro()
    {
        $this->maestro = maestro::find($this->id);
        if($this->maestro != null)
        {
            $this->getMaestro = ['nombre' => $this->maestro->nombre,
                                'apellido'=> $this->maestro->apellido,
                                'matricula'=> $this->maestro->matricula,
                                'email'=> $this->maestro->email,
                                'telefono' => $this->maestro->telefono,
            ];
        }
    }

    public function maestroUpdate()
    {
        $validation = $this->validate()['model'];

        $this->maestro->nombre=($validation['nombre']);
        $this->maestro->apellido=($validation['apellido']);
        $this->maestro->matricula=($validation['matricula']);
        $this->maestro->email=($validation['email']);
        $this->maestro->telefono=($validation['telefono']);
        
        $this->maestro->save();
        //dd($this->maestro);

        return redirect()->to(route("maestros.index"));
    }
}
