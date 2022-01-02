
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
@php
$pcolor = "";
@endphp
<div class="card">
    <div class="card-body">
            <div class="card-header">
               <a class ="btn btn-primary"href="{{route('pacientes.create')}}">Agregar establecimiento</a>            
            </div>
            <div class="card-body">  
                <table id ="paciente"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>id</th>
                            <th>ci</th>
                            <th>nombre</th>            
                            <th>paterno</th>            
                            <th>materno</th>            
                            <th>fechaNacimiento</th>         
                            <th>edad</th>
                            <th>sexo</th>     
                            <th>direccion</th>   
                            <th>usuario</th>   
                            <th ></th>
                            <th ></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr>
                                    <td>{{$paciente->id}}</td>
                                    <td>{{$paciente->ci}}</td>
                                    <td>{{$paciente->nombre}}</td>
                                    <td>{{$paciente->paterno}}</td>
                                    <td>{{$paciente->materno}}</td>
                                    <td>{{$paciente->fecha_nacimiento}}</td>
                                    <td>{{$paciente->edad}}</td>
                                    <td>{{$paciente->sexo}}</td>
                                    <td>{{$paciente->direccion}}</td>
                                    <td>{{$paciente->user->name}}</td>
                                    
                                    <td>
                                        <a class ="btn btn-primary btn-sm"href="{{route('pacientes.edit',$paciente)}}">editar</a>
                                    </td>  
                        
                                    <td >
                                        <form action="{{route('pacientes.destroy',$paciente)}}" method="post">
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