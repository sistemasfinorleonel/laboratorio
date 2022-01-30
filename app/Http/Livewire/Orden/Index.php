<?php

namespace App\Http\Livewire\Orden;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\OrdenLaboratorio;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{   public $table=true; 
    protected $paginationTheme="bootstrap";
    use WithPagination;
    public $nombre;
    public $departamento_id="1";
    public $provincia_id="1";
    public function render()
    { $data= OrdenLaboratorio::all();
        return view('livewire.orden.index',[
            'ordens' => $data
        ]);
    }
}
