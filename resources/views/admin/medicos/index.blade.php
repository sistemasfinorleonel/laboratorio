
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
@php
$pcolor = "";
@endphp
<div class="card">
    <div class="card-body">
            <div class="card-header">
               <a class ="btn btn-primary"href="{{route('medicos.create')}}"> Registrar nuevo medico</a>            
            </div>
            <div class="card-body">  
                <table id ="medico"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>Id</th>
                            <th>Carnet</th>
                            <th>Nombre</th>            
                            <th>Apellido paterno</th>            
                            <th>Apellido materno</th>            
                            <th>Fecha de nacimiento</th>         
                           <th>Sexo</th>     
                            <th>Direccion</th>   
                            <th>Usuario</th>   
                            <th ></th>
                            <th ></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($medicos as $medico)
                            <tr>
                                    <td>{{$medico->id}}</td>
                                    <td>{{$medico->ci}}</td>
                                    <td>{{$medico->nombre}}</td>
                                    <td>{{$medico->paterno}}</td>
                                    <td>{{$medico->materno}}</td>
                                    <td>{{$medico->fecha_nacimiento}}</td>
                                   <td>{{$medico->sexo}}</td>
                                    <td>{{$medico->direccion}}</td>
                                    <td>{{$medico->user->name}}</td>
                                    
                                    <td>
                                        <a class ="btn btn-primary btn-sm"href="{{route('medicos.edit',$medico)}}">Editar</a>
                                    </td>  
                        
                                    <td >
                                        <form action="{{route('medicos.destroy',$medico)}}" method="post">
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
@stop