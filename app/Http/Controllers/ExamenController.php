<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Models\Referencia;
use App\Models\Servicio;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examens=Examen::all();
    
        return view('admin.examens.index',compact('examens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $servicios=Servicio::all();
      return view('admin.examens.create',compact('servicios'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $referencia=new Referencia;
        $examen=new Examen;
  Referencia::Create([     
 'edad_ini'=> $request->edad_ini,
 'edad_fin'=> $request->edad_fin,
 'sexo'=> $request->sexo,
 'unidad_medida'=> $request->unidad_medida,
 'rango_ini'=> $request->rango_ini,
 'rango_fin'=> $request->rango_fin,
]);
 Examen::create([
'nombre'=>$request->nombre,
'servicio_id'=>$request->servicio_id,   
'referencia_id'=>Referencia::latest()->first()->id, 
 ]);
 //return Referencia::latest()->first()->id;
 return redirect()->route('examens.index');
 //return view('admin.examens.index');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit(Examen $examen)
    { $servicios=Servicio::all();
        
        return view('admin.examens.edit',compact('servicios')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen)
    {
        //
    }
}
