@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="card">
    <span><strong>
        Nombre completo del paciente
    </strong>
    </span>
    <div class="col-13">
    {{paciente(orden_laboratorio(detalle_servicio($iddetalle_servicio)
    ->orden_laboratorio_id)->paciente_id)->nombre}}
    {{paciente(orden_laboratorio(detalle_servicio($iddetalle_servicio)
        ->orden_laboratorio_id)->paciente_id)->paterno}}
        {{paciente(orden_laboratorio(detalle_servicio($iddetalle_servicio)
            ->orden_laboratorio_id)->paciente_id)->materno}}
</div>
</div>
  {{--   {{paciente(detalle_servicio($iddetalle_servicio)->paciente_id)->paterno}}
    {{paciente(detalle_servicio($iddetalle_servicio)->paciente_id)->materno}}

{{paciente(detalle_servicio($iddetalle_servicio)->paciente_id)->nombre}} --}}
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        <table id ="paciente"class= "table table-striped" style="width:100%"> 
            <thead>
                <tr>
                
                    <th>#</th>
             {{--        <th>PACIENTE</th>
              --}}       <th>SERVICIO</th>            
                    <th>EXAMEN</th>            
                    <th>REFERENCIA</th>                   
                    <th>RESULTADO</th>
                    <th >FECHA</th>
                    <th >ACCION</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($detalleexamens as $detalleexamen)
                    <tr>
                        
                        <td>{{$detalleexamen->id}}</td>
               {{--          <td>{{paciente(orden_laboratorio(detalle_servicio($detalleexamen->oservicio_id)->orden_laboratorio_id)->paciente_id)->nombre}}</td>
                  --}}    
                        <td>{{servicio(detalle_servicio($detalleexamen->oservicio_id)->servicio_id)->nombre}}</td>
                        <td>{{examen($detalleexamen->exa_id)->nombre}}</td>
                        <td whit="100">{{referencia(examen($detalleexamen->exa_id)->referencia_id)->unidad_medida}}
                            {{referencia(examen($detalleexamen->exa_id)->referencia_id)->rango_ini}}
                         -  {{referencia(examen($detalleexamen->exa_id)->referencia_id)->rango_fin}}</td>

                        <td>{{$detalleexamen->resultado}}</td>
                       
                        <td>{{orden_laboratorio(detalle_servicio($detalleexamen->oservicio_id)->orden_laboratorio_id)->fecha}}</td>
                            
                         
                            
                                             
                            <td>
                                <a class ="btn btn-primary btn-sm"href="{{route('detalleexamens.edit',$detalleexamen)}}">editar</a>
                            </td>  
              
                            <td >
                            {{--     <form action="{{route('establecimientos.destroy',$establecimiento)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">ELIMINAR</button>
                                </form> --}}
                            </td>
                                           
                    </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
</div> 
@stop