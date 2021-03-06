<?php

namespace App\Http\Livewire\OrdenLaboratoriio;

use App\Models\OrdenLaboratorio;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{ public $seach_ini;
  public $seach_fin;
    public function render()

    {   
        $paciente=Paciente::where('user_id','=', Auth::user()->id)->first();
 if($paciente!=null){
    
        $ordens=OrdenLaboratorio::where('paciente_id','=',$paciente->id)->get();
        return view('livewire.orden-laboratoriio.index',[
            'ordens'=>$ordens
        ]);}
    
    else{
        if(Auth::user()->id==3||Auth::user()->name=='doctor'||Auth::user()->name=='Mari')
       { $ordens=OrdenLaboratorio::all();
        return view('livewire.orden-laboratoriio.index',[
            'ordens'=>$ordens
        ]);}
        else
        {$ordens=OrdenLaboratorio::where('paciente_id','=',0)->get();
            return view('livewire.orden-laboratoriio.index',[
                'ordens'=>$ordens
            ]);

        }
    }
    }
}
