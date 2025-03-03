<?php

namespace App\Livewire\Materias;

use Livewire\Component;
use App\Models\materia;

class EditMateria extends Component
{
    protected function rules()
    {
        return[
                'model.nomMateria' => 'required|min:3|max:50',
                'model.clave' => 'required|regex:([A-Z.+-.+0-9])|min:8|max:8',
                'model.horas' => 'required'    
    ];
    }
    public function messages()
    {
        return[
                'model.nomMateria.required' =>'El campo se encuentra vació',
                'model.nomMateria.min' => 'La longitud minima debe ser de 3 caracteres',
                'model.nomMateria.max' => 'La longitud maxima debe ser de 8 caracteres',
                'model.clave.required' => 'El campo se encuentra vació',
                'model.clave.regex' => 'El formato no es valido',
                'model.clave.min' => 'La longitud minima debe ser de 8 caracteres',
                'model.clave.max' => 'La longitud maxima debe ser de 8 caracteres',
                'model.horas.required' => 'El campo se encuentra vació',

        ];
    }
    public $materia;
    public $getMateria;
    public $model=[];
    public $id;

    public function render()
    {
        return view('livewire.materias.edit-materia');
    }
    public function mount()
    {
        $this->findMateria();
        $this->model = $this->getMateria;
    }

    public function findMateria()
    {
        $this->materia = materia::find($this->id);
        if($this->materia != null)
        {
            $this->getMateria = [
                                'nomMateria' => $this->materia->nomMateria,
                                'clave' => $this->materia->clave,
                                'horas' => $this->materia->horas,
            ];
        }
    }
    public function materiaUpdate()
    {
        $validation = $this->validate()['model'];
        $this->materia->nomMateria = ($validation['nomMateria']);
        $this->materia->clave = ($validation['clave']);
        $this->materia->horas = ($validation['horas']);
        
        $this->materia->save();
    }
}
