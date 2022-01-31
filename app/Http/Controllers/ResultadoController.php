<?php

namespace App\Http\Controllers;

use App\Models\DetalleExamen;
use App\Models\DetalleServicio;
use App\Models\Examen;
use App\Models\OrdenLaboratorio;
use App\Models\Resultado;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $detalleservicios=DetalleServicio::all();

        return view('admin.resultados.index',compact('detalleservicios'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $id_servicio=$request->id_service;
        $id_orden=$request->id_orden;
       return  view('admin.resultados.verresultados');
   //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {  $iddetalle_servicio=$id;
         $detalleexamens=DetalleExamen::where('oservicio_id','=',$id)->get();
        return view('detalleexamens.index',compact('detalleexamens','iddetalle_servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleServicio $detalle)
    { return $detalle;
        $detalleservicios=DetalleServicio::where('orden_laboratorio_id', 3)->get('servicio_id');
      // $idservice= $detalleservicios->servicio_id;
      // return $leonel;
      $services=Servicio::all(); 
      $examenes=Examen::all();
      // $services=Servicio::where("$detalleservicios->servicio_id",'=','id')->get();
        //$examenes=Examen::where("$services->id",'servicio_id')->first();
       
        
      //  $detalleexamens=DetalleExamen::all();

        return view('admin.resultados.edit',compact('services','examenes','detalleservicios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultado $resultado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultado $resultado)
    {
        //
    }
}
