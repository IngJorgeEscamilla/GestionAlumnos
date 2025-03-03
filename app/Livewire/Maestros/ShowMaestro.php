<?php

namespace App\Livewire\Maestros;

use Livewire\Component;
use App\Models\maestro;

class ShowMaestro extends Component
{
    public $maestro;
    public $id;

    public function render()
    {
        return view('livewire.maestros.show-maestro');
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
