<?php

namespace App\Livewire\Materias;

use Livewire\Component;
use App\Models\materia;

class ShowMateria extends Component
{
    public $materia;
    public $id;
    public function render()
    {
        $this->materia = materia::find($this->id);
        return view('livewire.materias.show-materia');
    }
}
