<?php

namespace App\Livewire\Grupos;

use App\Models\grupo;
use Livewire\Component;

class IndexGrupo extends Component
{
    public $Listgrupo=[];
    
    public function render()
    {
        $this->listGruop();
        return view('livewire.grupos.index-grupo');
    }

    public function mount()
    {
        
    }

    public function listGruop()
    {
        $this->Listgrupo = grupo::all();
    }

    public function deleteGrupo(grupo $grupo)
    {
        $grupo->delete();
    }
}
