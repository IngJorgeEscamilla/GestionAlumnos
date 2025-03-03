<?php

namespace App\Livewire\Materias;

use Livewire\Component;
use App\Models\materia;

class IndexMateria extends Component
{
    
    public $materias = [];

    public function render()
    {
        $this->cargarMaterias();
        return view('livewire.materias.index-materia');
    }

    public function cargarMaterias()
    {
        $this->materias = materia::all();
    }

    public function deleteMateria(materia $materia)
    {
        $materia->Delete();
    }
}
