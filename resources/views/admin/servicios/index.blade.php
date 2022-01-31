
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
@php
$pcolor = "";
@endphp
<div class="card">
    <div class="card-body">
            <div class="card-header">
               <a class ="btn btn-primary"href="{{route('servicios.create')}}"> Agregar servicio</a>            
            </div>
            <div class="card-body">  
                <table id ="servicio"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>Id</th>
                            <th>Nombre del servicio</th>            
                            <th>Precio</th>            
                            <th>Nivel</th>            
                            <th>Financiamiento</th>         
                           <th>Tipo</th>     
                            <th ></th>
                            <th ></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($servicios as $servicio)
                            <tr>
                                    <td>{{$servicio->id}}</td>
                                    <td>{{$servicio->nombre}}</td>
                                    <td>{{$servicio->precio}}</td>
                                    <td>{{$servicio->nivel}}</td>
                                    <td>{{$servicio->financiamiento}}</td>
                                   <td>{{$servicio->Tipo}}</td>    
                                    <td>
                                        <a class ="btn btn-primary "href="{{route('servicios.edit',$servicio)}}">Editar</a>
                                    </td>  
                        
                                    <td >
                                        <form action="{{route('servicios.destroy',$servicio)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger " type="submit">Eliminar</button>
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
    $('#servicio').DataTable(
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