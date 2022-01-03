
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
@php
@endphp
<div class="card">
    <div class="card-body">
            <div class="card-header">
               <a class ="btn btn-primary"href="{{route('examens.create')}}"> agregar examen</a>            
            </div>
            <div class="card-body">  
                <table id ="examen"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>id</th>
                         
                            <th>nombre</th>            
                            <th>edad ini</th>            
                            <th>edad fin</th>            
                            <th>sexo</th>         
                            <th>unidad medida</th>
                            <th>rango ini</th>     
                            <th>rango fin</th>   
                            <th ></th>
                            <th ></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($examens as $examen)
                            <tr>
                                    <td>{{$examen->id}}</td>   
                                    <td>{{$examen->nombre}}</td>
                                    <td>{{$examen->referencia->edad_ini}}</td>
                                    <td>{{$examen->referencia->edad_fin}}</td>
                                    <td>{{$examen->referencia->sexo}}</td>
                                    <td>{{$examen->referencia->unidad_medida}}</td>
                                    <td>{{$examen->referencia->rango_ini}}</td>
                                    <td>{{$examen->referencia->rango_fin}}</td>
                                   
                                    <td>
                                        <a class ="btn btn-primary btn-sm"href="{{route('examens.edit',$examen)}}">editar</a>
                                    </td>  
                        
                                    <td >
                                        <form action="{{route('examens.destroy',$examen)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">ELIMINAR</button>
                                        </form>
                                    </td>
                                                   
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
<button id="btn1">clon</button>



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
    $('#examen').DataTable(
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
@stop