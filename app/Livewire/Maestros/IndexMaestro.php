<?php

namespace App\Livewire\Maestros;

use Livewire\Component;
use App\Models\maestro;
use Livewire\Attributes\On;

class IndexMaestro extends Component
{
    public $maestrosLista=[];

    public function render()
    {
        $this->cargarLista();
        return view('livewire.maestros.index-maestro');
    }
    public function deleteMaestro(maestro $maestro)
    {
        $maestro->delete();
        //return redirect()->to(route("maestros.index"));
    }
    #[On('BajaMaestro')]
    public function cargarLista()
    {
        $this->maestrosLista = maestro::all();
    }
}
