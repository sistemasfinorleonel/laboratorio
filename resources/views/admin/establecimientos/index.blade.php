@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
@php
$pcolor = "";
@endphp
<div class="card">
    <div class="card-body">
            <div class="card-header">
               <a class ="btn btn-primary"href="{{route('establecimientos.create')}}">Agregar establecimiento</a>            
            </div>
            <div class="card-body">  
                <table id ="paciente"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>id</th>
                            <th>Municipio</th>
                            <th>Red de salud</th>            
                            <th>Nombre</th>            
                            <th>Area</th>            
                            <th>Nivel</th>         
                            <th>Tipo</th>
                            <th ></th>
                            <th ></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($establecimientos as $establecimiento)
                            <tr>
                                    <td>{{$establecimiento->id}}</td>
                                    <td>{{municipio($establecimiento->municipio_id)->nombre}}</td>
                                    <td>{{red($establecimiento->red_id)->nombre}}</td>
                                    <td>{{$establecimiento->nombre}}</td>
                                    <td>{{$establecimiento->esta_area}}</td>
                                    <td>{{$establecimiento->nivel}}</td>
                                    <td>{{$establecimiento->tipo}}</td>
                                                                       
                                    <td>
                                        <a class ="btn btn-primary btn-sm"href="{{route('establecimientos.edit',$establecimiento)}}">Editar</a>
                                    </td>  
                        
                                    <td >
                                        <form action="{{route('establecimientos.destroy',$establecimiento)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                                   
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>




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
    $('#paciente').DataTable(
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

