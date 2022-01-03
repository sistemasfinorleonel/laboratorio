<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Models\Referencia;
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
    {
      return view('admin.examens.create');  
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
  
 $examen['nombre']=$request->nombre;
 $examen['referencia_id']=Referencia::latest()->first()->id;   
 $examen['servicio_id']=Referencia::latest()->first()->id;   
 Examen::create([
'nombre'=>$request->nombre,
    'referencia_id'=>Referencia::latest()->first()->id,   
    'servicio_id'=>Referencia::latest()->first()->id, 
 ]);
 redirect()->route('examens.index');
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
    {
        //
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
