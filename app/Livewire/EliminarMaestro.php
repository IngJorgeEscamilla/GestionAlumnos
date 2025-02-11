<?php

namespace App\Livewire;

use App\Models\maestro;
use Livewire\Component;

class EliminarMaestro extends Component
{
    public $id;
    public $value;

    public function render()
    {
        return view('livewire.eliminar-maestro');
    }



    public function eliminarMaestro()
    {
        $maestro = maestro::find($this->id);
        if($maestro != null)
        {
            $eliminado =
            $maestro->delete();
            $this->dispatch('BajaMaestro', eliminar:$eliminado);
            //return ($eliminado);
            //dd('elimninado');
        }
    }
}
