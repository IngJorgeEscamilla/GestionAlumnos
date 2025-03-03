<?php

namespace App\Livewire\Grupos;

use App\Models\grupo;
use Livewire\Component;

class IndexGrupo extends Component
{
    public $grupo;
    public $model=[];

    
    public function render()
    {
        return view('livewire.grupos.index-grupo');
    }

    public function mount()
    {
        $this->listGruop();
    }

    public function listGruop()
    {
        $this->grupo = grupo::all();
    }
}
