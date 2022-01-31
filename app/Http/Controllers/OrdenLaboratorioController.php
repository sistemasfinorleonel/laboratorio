<?php

namespace App\Http\Controllers;

use App\Models\DetalleExamen;
use App\Models\DetalleServicio;
use App\Models\Establecimiento;
use App\Models\Municipio;
use App\Models\OrdenLaboratorio;
use App\Models\Red;
use App\Models\Servicio;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\Examen;
use App\Models\Medico;
use App\Models\Paciente;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class OrdenLaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $ser_id=1;
    public $c=0;
    public function index()
    {  
       return view('orden-laboratorios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$reds = Red::all();
        $carbon = new \Carbon\Carbon();
        $mytime =$carbon->now(); 
        $mytime->format('Y-m-d');
         $mytime->toDateTimeString();
         $municipios=Municipio::all();
         $establecimientos = Establecimiento::where('municipio_id','=','55')->get();
         $servicios=Servicio::all();
         $medicos=Medico::all();
        $pacientes=Paciente::all();
 
         return view('admin.ordens.orden',compact('pacientes','medicos','servicios','mytime','municipios','establecimientos','reds'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $ser_id=$request->select_process; 
        $nuevo=new OrdenLaboratorio;
        $nuevo['fecha']=new DateTime('today');
        $nuevo['paciente_id']=$request->paciente_id;
        $nuevo['establecimiento_id']=$request->establecimiento_id;
        $nuevo['total']=0;
        $nuevo['medico_id']=$request->medico_id;
        $nuevo->save();

        $fec=Date($request->fecha_solicitud);
        $pac_id=$request->paciente_id;
        $est_id=$request->establecimiento_id;
        $tot=0;
        $med_id=$request->medico_id;
        $servicioEspera=$request->select_process;
        $detalles =Examen::detalle($this->ser_id)->get('id');
        $c=0;
        $idlaboratorioultimo=  OrdenLaboratorio::latest()->first()->id;
           foreach($servicioEspera as $index => $id){
                $id_ser=$servicioEspera[$index];
                $detalle_service=DetalleServicio::create([
                    'orden_laboratorio_id'=>"$idlaboratorioultimo",
                    'servicio_id'=> "$id_ser",
                'fecha_recepcion_muestra'=>null,
                ]); 
                    foreach($detalles as $index => $id){
                        $id_examen= $detalles[$index]->id;   
                        DetalleExamen::create([
                        
                            'oservicio_id'=> "$detalle_service->id",
                            'exa_id'=>"$id_examen",
                    
                        ]);  
                    }
        
           }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdenLaboratorio  $ordenLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {//return $id;
        //return DetalleServicio::all();
        $detalleservicios=DetalleServicio::where('orden_laboratorio_id','=',$id)->get();

        return view('admin.resultados.index',compact('detalleservicios'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdenLaboratorio  $ordenLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenLaboratorio $ordenLaboratorio)
    {
        return $ordenLaboratorio;
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
