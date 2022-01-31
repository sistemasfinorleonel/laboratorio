<?php

namespace App\Http\Controllers;

use App\Models\DetalleServicio;
use App\Models\OrdenLaboratorio;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class PDFController extends Controller
{


public function mostrar($servicio){
   
   
    $orden=OrdenLaboratorio::findOrFail($servicio);
   $paciente_id=$orden->paciente_id;
 /* 
       $collecion =  DetalleServicio::
       select( 'orden_laboratorios.id',
       /* 'servicios.nombre as servicio_nombre','examens.nombre as examen_nombre'
       ,'detalle_examens.resultado','referencias.rango_ini','referencias.rango_fin' 
       )->
       join('orden_laboratorios','orden_laboratorios.id','=','detalle_servicios.orden_laboratorio_id')->
        join('servicios','servicios.id','=','detalle_servicios.servicio_id ')/* ->
       join('detalle_examens','detalle_servicios.id','=','detalle_examens.oservicio_id')->
       join('examens','examens.id','=','detalle_examens.exa_id')->
       join('referencias','referencias.id','=','examens.referencia_id') ->get();
       // where('orden_laboratorios.paciente_id','=',$paciente_id)->get();

  return$collecion;

 */

 
 $collecion=DB::select('SELECT orden_laboratorios.id as orden_id,
servicios.nombre as servicio_nombre,examens.nombre as examen_nombre
,detalle_examens.resultado ,referencias.rango_ini,referencias.rango_fin 


FROM orden_laboratorios,servicios,detalle_servicios,examens,detalle_examens,referencias
WHERE 
orden_laboratorios.id=detalle_servicios.orden_laboratorio_id AND
servicios.id=detalle_servicios.servicio_id AND
detalle_servicios.id=detalle_examens.oservicio_id AND
examens.id=detalle_examens.exa_id AND
referencias.id=examens.referencia_id AND 
orden_laboratorios.paciente_id=? AND
orden_laboratorios.id=?'

,[$paciente_id,$orden->id]);


 $data = [
    'collecion' => $collecion,
  'orden'=>$orden  
];
  $pdf = PDF::loadView('pdf.resultadopdf',$data);
   // return $pdf->stream('avance_academico.pdf'); 
   return $pdf->download('avance_academico.pdf');
}  

}
