<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use App\Models\Municipio;
use App\Models\OrdenLaboratorio;
use App\Models\Red;
use App\Models\Servicio;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class OrdenLaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $reds = Red::all();
        $municipios=Municipio::all();
        $establecimientos = Establecimiento::all();
        $servicios=Servicio::all();
       return view('admin.ordens.orden',compact('servicios','municipios','establecimientos','reds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $analisis=$request->analisis;
         $analisisId=$request->analisisID; 
        foreach($analisis as $index => $id){

   $analisis[$index];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdenLaboratorio  $ordenLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenLaboratorio $ordenLaboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdenLaboratorio  $ordenLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenLaboratorio $ordenLaboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrdenLaboratorio  $ordenLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenLaboratorio $ordenLaboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdenLaboratorio  $ordenLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenLaboratorio $ordenLaboratorio)
    {
        //
    }
}
