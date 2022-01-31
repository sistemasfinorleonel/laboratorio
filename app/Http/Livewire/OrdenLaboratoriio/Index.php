<?php

namespace App\Http\Livewire\OrdenLaboratoriio;

use App\Models\OrdenLaboratorio;
use Livewire\Component;

class Index extends Component
{ public $seach_ini;
  public $seach_fin;
    public function render()
    { $ordens=OrdenLaboratorio::all();
        return view('livewire.orden-laboratoriio.index',[
            'ordens'=>$ordens
        ]);
    }
}
