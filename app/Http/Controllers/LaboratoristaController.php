<?php

namespace App\Http\Controllers;

use App\Models\Laboratorista;
use App\Models\User;
use Illuminate\Http\Request;

class LaboratoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $laboratoristas = Laboratorista::paginate(15);
        return view('admin.laboratoristas.index',compact('laboratoristas'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('admin.laboratoristas.create',compact('users'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPaciente= request()->except('_token');
        Laboratorista::insert($datosPaciente);
        return redirect()->route('admin.laboratoristas.index');
     
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratorista  $Laboratorista
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorista $laboratorista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratorista  $laboratorista
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratorista $laboratorista)
    { $users=User::all();
        return view('admin.laboratoristas.edit',compact('users'),compact('laboratorista'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorista  $laboratorista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratorista $laboratorista)
    {
        $datoslaboratorista= request()->except(['_token','_method']);
        Laboratorista::where('id','=',$laboratorista->id)->update($datoslaboratorista);
        return redirect()->route('admin.laboratoristas.index');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorista  $laboratorista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorista $laboratorista)
    {
        $laboratorista->delete();
        return redirect()->route('admin.laboratoristas.index');
        
    }
}
