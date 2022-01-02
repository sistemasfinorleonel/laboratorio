<?php

namespace App\Http\Controllers;


use App\Models\Establecimiento;
use App\Models\User;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    
    public function index()
    {
        $establecimiento = Establecimiento::paginate(15);
        return view('admin.establecimientos.index',compact('establecimiento'));
    }

   
    public function create()
    { $users=User::all();
        return view('admin.establecimientos.create',compact('users'));
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
