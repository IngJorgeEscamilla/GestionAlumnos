<?php

namespace App\Livewire\Materias;

use Livewire\Component;
use App\Models\materia;
use Livewire\Attributes\Validate;

class CreateMateria extends Component
{
    public $materia;

    public $model = [];
    public $iniciado = false;

    protected function rules()
    {
        return[
            'model.nomMateria' => 'required|min:3|max:50',
            'model.clave' => 'required|regex:([A-Z.+-.+0-9])|min:8|max:8',
            'model.horas'=> 'required',
        ];
    } 
    public function messages()
    {
        return[
            'model.nomMateria.required' => 'el campo se encuentra vació',
            'model.nomMateria.min' => 'la longitud minima del campo debe ser de 3 caracteres',
            'model.nomMateria.max' => 'la longitud maxima del campo debe ser de 50 caracteres',
            'model.clave.required' => 'el campo se encuentra vació',
            'model.clave.regex' => 'el formato del clave es invalido',
            'model.clave.min' => 'la longitud minima del campo deber ser de 8 caracteres',
            'model.clave.max' => 'la longitud maxima del campo deber ser de 8 caracteres',
            'model.horas.required' => 'el campo se encuentra vació'
        ];
    }
    public function render()
    {
        $this->cargarForm();
        return view('livewire.materias.create-materia');
    }

    public function cargarForm()
    {
        if(!$this->iniciado)
        {
            $this->materia = new materia();
            $this->model=['nomMateria'=>'','clave'=>'','horas'=>'',];
            $this->iniciado=true;
        }
    }

    public function registerMateria()
    {
        $validated = $this->validate()['model'];
        $this->materia = new materia();
        $this->materia->nomMateria=($validated['nomMateria']);
        $this->materia->clave=($validated['clave']);
        $this->materia->horas=($validated['horas']);
        $this->model = $this->materia->save();
        $this->iniciado = true;
        return redirect()->route(("materias.index"));

        
    }
}
