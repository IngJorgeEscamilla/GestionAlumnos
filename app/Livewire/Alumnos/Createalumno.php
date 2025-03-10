<?php

namespace App\Livewire\Alumnos;

use Livewire\Component;
use App\Models\alumno;
use App\Models\grupo;

class Createalumno extends Component
{
    public $alumno;
    public $listGrupos=[];

    public $model=[];

protected function rules()
{
    return  [
        'model.nombre' => 'required|regex:[(\w\D)]|min:2|max:20',
        'model.apellido'=>'required|regex:[(\w\D)]|min:2|max:20',
        'model.semestre'=>'required',
        'model.matricula'=>'required|min:8|max:8',
        'model.email'=>'required|email',
        'model.telefono'=>'required|min:10|max:10',
        'model.grupo_id'=>'nullable'
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

//public $correo ='@test.com';

public $vista = false;


    public function render()
    {
        return view('livewire.alumnos.createalumno');
    }

    public function mount()
    {
        $this->cargaForm();
        $this->listGrupos = grupo::all();
    }

    public function recargar(){
        $this->vista = false;
        $this->cargarForm();
    }

    public function cargaForm()
    {
        if(!$this->vista){
            $this->alumno = new alumno();
            $this->model = ['nombre'=>'','apellido'=>'','matricula'=>'','semestre'=>'','email'=>'','telefono'=>'','grupo_id'=>''];
            $this->vista = true;
        }
    }


    public function guardar()
    {
        if(strlen($this->model['grupo_id'])<1){
            $this->model['grupo_id'] = "";
           
        }
       //Se creo una variable dentro de la funcion y se asigno el la funcion validate pasando la variable model
        $validation = $this->validate()['model'];
        //dd([$this->model,$validation]);
        

        //La variable alumno fue asignada una nueva instacia del modelo alumno
        $this->alumno = new alumno();

        //A la variable alumno se le pasaron los parametros del formulario que se encontraban guardado dentro de la variable vaidation
        $this->alumno->nombre=($validation['nombre']);
        $this->alumno->apellido=($validation['apellido']);
        $this->alumno->matricula=($validation['matricula']);
        $this->alumno->semestre=($validation['semestre']);
        $this->alumno->email=($validation['email']);
        $this->alumno->telefono=($validation['telefono']);
       
        $this->alumno->grupo_id=($validation['grupo_id']);
        
       

        //El arreglo model se le paso la variable alumno con la funcion save, para guardar los parametros en la base de datos
        $this->model = $this->alumno->save();
        
        
        //dd($this->model);
        $this->vista = false;
        //session()->flash('correcto','alumno creado correctamente');
        return redirect()->to(route("alumnos.index"));
    }

    public function cargaAlumno($id)
    {
        $alumno = alumno::find($id);
        if($alumno != null)
        {
            $this->model = ['nombre' =>$alumno->nombre,
                            'apellido' => $alumno->apellido,   
                            'matricula'=>$alumno->matricula,
                            'semestre'=>$alumno->semestre,
                            'email'=>$alumno->email,
                            'telefono'=>$alumno->telefono,];
        }

    } 
    public function eliminarAlumno()
    {
        $alumno = alumno::find($this->id);
        //dd($this->id);
        if($alumno != null)
        {
            $eliminado =
            $alumno->delete();
            $this->dispatch('BajaAlumno', eliminar:$eliminado );
            ('funciona');
            //return ($eliminado);
        }
    }

}
