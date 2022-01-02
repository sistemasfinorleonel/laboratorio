<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $medicos = Medico::paginate(15);
        return view('admin.medicos.index',compact('medicos'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('admin.medicos.create',compact('users'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     $datosMedico= request()->except('_token');
  
        Medico::insert($datosMedico);
        return redirect()->route('admin.medicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit(Medico $medico)
    {
        $users=User::all();
        return view('admin.medicos.edit',compact('users'),compact('medico'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {   $datosmedicos= request()->except(['_token','_method']);
        medico::where('id','=',$medico->id)->update($datosmedicos);
        return redirect()->route('admin.medicos.index');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        $medico->delete();
        return redirect()->route('admin.medicos.index');
        
    }
}
