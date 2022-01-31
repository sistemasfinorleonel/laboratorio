@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>INFORMACION DEL SERVICIO</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        <table id ="paciente"class= "table table-striped" style="width:100%"> 
            <thead>
                <tr>
                
                    <th>#</th>
                    <th>PACIENTE</th>
                    <th>SERVICIO</th>            
                    <th>EXAMEN</th>            
                    <th>REFERENCIA</th>                   
                    <th>RESULTADO</th>
                    <th >FECHA</th>
                    <th >ACCION</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($detalleexamens as $establecimiento)
                    <tr>
                        
                        <td>{{$establecimiento->id}}</td>
                        <td>{{paciente(orden_laboratorio(detalle_servicio($establecimiento->oservicio_id)->orden_laboratorio_id)->paciente_id)->nombre}}</td>
                     
                        <td>{{servicio(detalle_servicio($establecimiento->oservicio_id)->servicio_id)->nombre}}</td>
                        <td>{{examen($establecimiento->exa_id)->nombre}}</td>
                        <td whit="100">{{referencia(examen($establecimiento->exa_id)->referencia_id)->unidad_medida}}
                            {{referencia(examen($establecimiento->exa_id)->referencia_id)->rango_ini}}
                         -  {{referencia(examen($establecimiento->exa_id)->referencia_id)->rango_fin}}</td>

                        <td>{{$establecimiento->resultado}}</td>
                       
                        <td>{{orden_laboratorio(detalle_servicio($establecimiento->oservicio_id)->orden_laboratorio_id)->fecha}}</td>
                    
                         
                            
                    {{--         <td>{{$establecimiento->municipio_id}}</td>
                            <td>{{$establecimiento->red_id}}</td>
                            <td>{{$establecimiento->nombre}}</td>
                            <td>{{$establecimiento->esta_area}}</td>
                            <td>{{$establecimiento->nivel}}</td>
                            <td>{{$establecimiento->tipo}}</td>
                                                               
                            <td>
                                <a class ="btn btn-primary btn-sm"href="{{route('establecimientos.edit',$establecimiento)}}">editar</a>
                            </td>  
                 --}}
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