<?php

namespace App\Livewire;

use App\Models\alumno;
use Livewire\Component;

class ActualizarAlumno extends Component
{   

    protected function rules()
    {
        return  [
            'model.nombre' => 'required|min:2|max:20',
            'model.apellido'=>'required|min:2|max:20',
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
            'model.nombre.min' =>'La longitud del campo debe ser minima de 2 caracteres',
            'model.nombre.max' =>'La longitud del campo debe ser maxima de 20 caraceteres',
            'model.apellido.required' => 'El campo apellido se encuentra vacio',
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
    public $getAlumno = [];
    public $model = [];

    public function render()
    {
        //$alumno = alumno::find($id);
        //dd($this->model);
       
        return view('livewire.actualizar-alumno');
       
       
    }
    
    public function mount()
    {
        $this->findAlumno();
        $this->model = $this->getAlumno;
        //sdd($this->model);
    }
    public function findAlumno()
    {
        $alumno = alumno::find($this->id);
        if($alumno != null)
        {
            $this->getAlumno = ['nombre' =>$alumno->nombre,
                                'apellido'=>$alumno->apellido,
                                'matricula'=>$alumno->matricula,
                                'semestre'=>$alumno->semestre,
                                'email'=>$alumno->email,
                                'telefono'=>$alumno->telefono,];
        }
    }


    public function dataUpdate()
    {
        $validation = $this->validate()['model'];
        $validation = alumno::find($this->id);
        if ($validation != null)
        {


            $this->getAlumno = ['model.nombre' => $validation->nombre,
                            'model.apellido' => $validation->apellido,
                            'model.matricula' =>$validation->matricula,
                            'model.semestre' =>$validation->semestre,
                            'model.email' =>$validation->email,    
                            'model.telefono' =>$validation->telefono,];

                           
        }
        $this->getAlumno->save($validation);
        //dd($validation);
        
        //$this->getAlumno->nombre=($validation['nombre']);
        //$this->getAlumno->apellido=($validation['apellido']);
        //$this->getAlumno->matricula=($validation['matricula']);
        //$this->getAlumno->semestre=($validation['semestre']);
        //$this->getAlumno->email=($validation['email']);
        //$this->getAlumno->telefono=($validation['telefono']);

        
        
        
        dd($this->getAlumno);
        
        //$this->vista = false;
        //session()->flash('correcto','alumno creado correctamente');
        //return redirect()->to(route("alumnos.index"));
    }
}   
