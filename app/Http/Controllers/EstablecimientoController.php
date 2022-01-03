<?php

namespace App\Http\Controllers;


use App\Models\Establecimiento;
use App\Models\Municipio;
use App\Models\Red;
use App\Models\User;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    
    public function index()
    {
        $establecimientos = Establecimiento::paginate(15);
    return view('admin.establecimientos.index',compact('establecimientos'));
    }

   
    public function create()
    { $redes=Red::all();
      $municipios=Municipio::all();
        return view('admin.establecimientos.create',compact('redes'),compact('municipios'));
    }

  
    public function store(Request $request)
    {
        $datosestablecimiento= request()->except('_token');
  
        Establecimiento::insert($datosestablecimiento);
        return redirect()->route('establecimientos.index');
     
    }

    
    public function show(Establecimiento $establecimiento)
    {
        //
    }

   
    public function edit(Establecimiento $establecimiento)
    { $users=User::all();
      return view('admin.establecimientos.edit',compact('users'),compact('establecimiento'));
    }

    
    public function update(Request $request, Establecimiento $establecimiento)
    {
        $datosestablecimiento= request()->except(['_token','_method']);
        
        Establecimiento::where('id','=',$establecimiento->id)->update($datosestablecimiento);
        
        return redirect()->route('establecimientos.index');
      
    }

    public function destroy(Establecimiento $establecimiento)
    {
        $establecimiento->delete();
        return redirect()->route('establecimientos.index');
        
    }
}
