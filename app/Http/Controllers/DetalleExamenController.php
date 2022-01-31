<?php

namespace App\Http\Controllers;

use App\Models\DetalleExamen;
use Illuminate\Http\Request;

class DetalleExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleExamen  $detalleExamen
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleExamen $detalleExamen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleExamen  $detalleExamen
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleExamen $detalleExamen)
    { $detalleexamen =$detalleExamen;
        return view('detalleexamens.edit',compact('detalleexamen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleExamen  $detalleExamen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleExamen $detalleExamen)
    { 

        $detalleExamen['resultado']=$request->resultado;
        $detalleExamen->update();
       // return $detalleExamen;
        return redirect()->route('ordenservicios.show',$detalleExamen->oservicio_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleExamen  $detalleExamen
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleExamen $detalleExamen)
    {
        //
    }
}
