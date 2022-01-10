
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<div class="card">
    <div class="card-body">
                                
        <div class="card-header">
           {{--     <a class ="btn btn-primary"href="{{-- {{route('medicos.create')}} "> agregar medico</a>            
           --}}
           <form action="{{route('resultados.store')}}" method="post">
           @csrf
            <label for="">numero de orden</label>
           <input type="text" id="id_orden" value=""   >
           <label for="">numero servicio</label>
           <input type="text" id="id_service" value=""  >
          
           <input type="submit" value="guarda">
        </form>
        </div>
            <div class="card-body">  
                <table id ="resultado"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>orden_laboratorio_id</th>
                            <th>servicio_id</th>
                            <th>examen</th>            
                            <th>#</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($detalleservicios as $detalleservicio)
                            <tr>
                                    <td>{{$detalleservicio->or_lab_id}}</td>
                                    <td>{{$detalleservicio->ser_id}}</td>
                                    <td>{{$detalleservicio->exa_id}}</td>
                                    
                                    
                                   <td>
                                        <a class ="btn btn-primary btn-sm"href="  {{route('resultados.edit',$detalleservicio->or_lab_id)}}   ">Colocar Resultado</a>
                                    </td>   
                        {{--}} 
                                    <td >
                                        <form action="{{route('medicos.destroy',$medico)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">ELIMINAR</button>
                                        </form>
                                    </td>
                                    --}}                
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