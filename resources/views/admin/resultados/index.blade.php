
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<div class="card">
        <div class="card-header">

        </div>
            <div class="card-body">  
                <table id ="resultado"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>#</th>
                            <th>Servicio</th>
                            <th>Paciente</th>            
                            <th>Fecha Solicitud  </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($detalleservicios as $detalleservicio)
                            <tr>
                                <td> {{$detalleservicio->id}}</td>
                                <td>{{servicio($detalleservicio->servicio_id)->nombre}}</td>
                                <td> {{paciente(orden_laboratorio($detalleservicio->orden_laboratorio_id)->paciente_id)->nombre}}
                                    {{paciente(orden_laboratorio($detalleservicio->orden_laboratorio_id)->paciente_id)->paterno}}
                                    <br>
                                     {{paciente(orden_laboratorio($detalleservicio->orden_laboratorio_id)->paciente_id)->materno}}
                                </td>
                              
                                <td> {{orden_laboratorio($detalleservicio->orden_laboratorio_id)->fecha}}</td>
                               
                                <td>
                                    <a class="btn-secondary btn-sm" href="{{ route('detalleexamens.show',$detalleservicio->id) }}">info</a>
                                </td>
                                
                                <td >
                                    <form action="{{route('ordenservicios.destroy',$detalleservicio->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">ELIMINAR</button>
                                    </form>
                                </td>
                                {{--}} <td>{{examen($detalleservicio->exa_id)->nombre}}</td>
                                   <td>
                                        <a class ="btn btn-primary btn-sm"href="  {{route('resultados.edit',$detalleservicio->or_lab_id)}}   ">Colocar Resultado</a>
                                    </td>     --}}
                                  
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>

@stop 
{{-- 

    <button id="btn1">clon</button> --}}


{{-- 
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">   

@endsection

@section('js') 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#medico').DataTable(
        {

            responsive:true,
            autoWhidh:false,
        
    
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por paginas",
            "zeroRecords": "nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ registros totales)",
            'search':'buscar:',
            'paginate':{
            'next':'siguiente',
            'previous':'anterior'
        }
        }
            }    );
} );
</script>
    
@endsection
@stop --}}