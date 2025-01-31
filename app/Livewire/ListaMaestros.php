<?php

namespace App\Livewire;

use App\Models\maestro;
use Livewire\Component;

class ListaMaestros extends Component
{
    public $maestrosLista=[];

    public function render()
    {
        $this->cargarLista();
        return view('livewire.lista-maestros');
    }

    public function cargarLista()
    {
        $this->maestrosLista = maestro::all();
    }
}
