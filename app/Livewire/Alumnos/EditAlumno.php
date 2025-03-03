<?php

namespace App\Livewire\Alumnos;

use Livewire\Component;
use App\Models\alumno;

class EditAlumno extends Component
{
    protected function rules()
    {
        return  [
            'model.nombre' => 'required|regex:[(\w\D)]|min:2|max:20',
            'model.apellido'=>'required|regex:[(\w\D)]|min:2|max:20',
            'model.semestre'=>'required',
            'model.matricula'=>'required|min:8|max:8',
            'model.email'=>'required|email',
            'model.telefono'=>'required|min:10|max:10',
        ];
    }
    public function messages()
    {
        return [
            'model.nombre.required' => 'El campo nombre se encuentra vacio',
            'model.nombre.regex' => 'El campo debe llenarse con caracteres alfabéticos',
            'model.nombre.min' =>'La longitud del campo debe ser minima de 2 caracteres',
            'model.nombre.max' =>'La longitud del campo debe ser maxima de 20 caraceteres',
            'model.apellido.required' => 'El campo apellido se encuentra vacio',
            'model.apellido.regex' => 'El campo debe llenarse con caracteres alfabéticos',
            'model.apellido.min' =>'La longitud del campo debe ser minima de 2 caracteres',
            'model.apellido.max' =>'La longitud del campo debe ser maxima de 20 caraceteres',
            'model.semestre.required'=>'El campo semestre se encuentra vacio',
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


    public $id;
    public $getAlumno;
    public $model = [];
    public $alumno;

    public function render()
    {
        //$alumno = alumno::find($id);
        //dd($this->model);
       
        return view('livewire.alumnos.edit-alumno');
       
       
    }
    
    public function mount()
    {
        $this->findAlumno();
        $this->model = $this->getAlumno;
        //sdd($this->model);
    }
    public function findAlumno()
    {
        $this->alumno = alumno::find($this->id);
        if($this->alumno != null)
        {
            $this->getAlumno = ['nombre' =>$this->alumno->nombre,
                                'apellido'=>$this->alumno->apellido,
                                'matricula'=>$this->alumno->matricula,
                                'semestre'=>$this->alumno->semestre,
                                'email'=>$this->alumno->email,
                                'telefono'=>$this->alumno->telefono,];
        }
    }


    public function dataUpdate()
    {
        $validation = $this->validate()['model'];
       
        $this->alumno->nombre=($validation['nombre']);
        $this->alumno->apellido=($validation['apellido']);
        $this->alumno->matricula=($validation['matricula']);
        $this->alumno->semestre=($validation['semestre']);
        $this->alumno->email=($validation['email']);
        $this->alumno->telefono=($validation['telefono']);
        
        $this->alumno->save();
            
        //dd($this->getAlumno);
        
        session()->flash('correcto','información del alumno actualizada correctamente');
        return redirect()->to(route("alumnos.index"));
    }
}
