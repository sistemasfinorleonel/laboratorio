<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleExamen;
use App\Models\DetalleServicio;
use App\Models\Examen;
use App\Models\Servicio;

class DetalleresultadoexamenController extends Controller
{
public function mostrar(DetalleServicio $detalle)
{ return 'leonl';
    $detalleservicios=DetalleServicio::where('orden_laboratorio_id', 2)->get('servicio_id');
  // $idservice= $detalleservicios->servicio_id;
  // return $leonel;
  $services=Servicio::all(); 
  $examenes=Examen::all();
  // $services=Servicio::where("$detalleservicios->servicio_id",'=','id')->get();
    //$examenes=Examen::where("$services->id",'servicio_id')->first();
   
    
  //  $detalleexamens=DetalleExamen::all();

    return view('admin.resultados.edit',compact('services','examenes','detalleservicios'));

}
}
