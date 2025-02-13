<?php

namespace App\Livewire;

use App\Models\maestro;
use Livewire\Component;

class VerMaestro extends Component
{
    public $maestro;
    public $id;



    public function render()
    {
        return view('livewire.ver-maestro');
    }

    public function mount()
    {
        $this->verMaestro();
    }

    public function verMaestro()
    {
        $this->maestro = maestro::find($this->id);
    }
}
