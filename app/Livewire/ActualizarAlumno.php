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
    public $getAlumno;
    public $model = [];
    public $alumno;

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
        //dd($validation);
        //$validation = alumno::find($this->id);
        //if ($validation != null)
        //{
        //    $this->getAlumno = ['model.nombre' => $validation->nombre,
        //                    'model.apellido' => $validation->apellido,
        //                    'model.matricula' =>$validation->matricula,
        //                    'model.semestre' =>$validation->semestre,
        //                    'model.email' =>$validation->email,    
        //                    'model.telefono' =>$validation->telefono,];
//
        //                   
        //}
         //$this->getAlumno->update($validation);
        //dd($validation);
        //dd(['getAlumno' => $this->getAlumno]);
        $this->alumno->nombre=($validation['nombre']);
        $this->alumno->apellido=($validation['apellido']);
        $this->alumno->matricula=($validation['matricula']);
        $this->alumno->semestre=($validation['semestre']);
        $this->alumno->email=($validation['email']);
        $this->alumno->telefono=($validation['telefono']);
        
        $this->alumno->save();
                
        
        //dd($this->getAlumno);
        
        //$this->vista = false;
        session()->flash('correcto','alumno creado correctamente');
        return redirect()->to(route("alumnos.index"));
    }
}   
