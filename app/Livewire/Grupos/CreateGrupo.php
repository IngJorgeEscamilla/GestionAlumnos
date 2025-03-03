<?php

namespace App\Livewire\Grupos;

use App\Models\grupo;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;

class CreateGrupo extends Component
{
    protected function rules(){
        return  ['model.nomGrupo' => 'required'];
    }
    public function messages()
    {
        return [
            'model.nomGrupo.required' => 'El campo se encuentra vació',
        ];
    }

    public $model=[];
    public $grupo;
    public $view = false;

    public function render()
    {
        return view('livewire.grupos.create-grupo');
    }

    public function cargarForm()
    {
        if(!$this->view)
        {
            $this->grupo = new grupo();
            $this->model = ['nomGrupo' => ''];
            $this->view = true;            
        }
    }

    public function createGruop()
    {
        $validation = $this->Validate()['model'];
        $this->grupo = new grupo();
        $this->grupo->nomGrupo=($validation['nomGrupo']);
        $this->model = $this->grupo->save();
        $this->view =true;
        return redirect()->route('grupos.index');

    }

}
