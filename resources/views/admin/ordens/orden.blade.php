

@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')


<div  class="container py-4">

    <div class="card">
    <div class="card container" > 
   
    <form class="" action="{{ route('ordens.store') }}" method="post" >
        @csrf 
            <div class="row shadow">
                <div class="col">
                    <img src="http://creadictivo.com/wp-content/uploads/2018/05/Escudo-de-Bolivia-Nuevo.jpg" width="150" class="" alt="">
                </div> 
                    <div class="col text-center">
                        <h2 class="fw-bold">SOLICITUD DE  EXAMEN DE </h2>
                        <h2 class="fw-bold"> LABORATORIO,IMAGENOLOGIA/GABINETE </h2>
                        <h2 class="fw-bold">O SERVICIOS DE SANGRE</h2>
                    </div>
                    <div class="col">
                        <img src="https://es.news-front.info/wp-content/uploads/2019/03/Bolivia-salud-SUS.jpg" width="200" class="" alt="">
                    </div>
            </div> <br>
        <div class="container">
        <div class="form-group ">
            <div class="row mb-3">

                <div class="col">
                    <div class="input-group input-group-lg">
                    <span class="input-group-text">Red</span>
                    <select name="red_id" id="red_id"  class="form-control">
                        @foreach ($reds as $red)
                            <option value="{{$red->id}}">{{$red->nombre}}</option>
                        @endforeach
                    </select>  
                    </div>
                </div>

                <div class="col">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text">Municipio</span>
                        <select name="municipio_id" id="municipio_id" class="form-control">
                            @foreach ($municipios as $municipio)
                                <option value="{{$municipio->id}}">{{$municipio->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
            </div> 
            

            <div class="row mb-3">  
                <div class="col">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text"for="">Establecimiento</span>
                        <select name="establecimiento_id" id="establecimiento_id" class="form-control">
                            @foreach ($establecimientos as $establecimiento)
                                <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}}</option>
                            @endforeach
                        </select> 
                    </div> 
                </div>
                                
                <div class="col">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text">Fecha de solicitud</span>
                       {{--  <input type="date" name="fecha_solicitud" id="fecha_solicitud" class="form" value="{{$mytime}}">
                        --}} <input type="date" name="fecha_solicitud" id="fecha_solicitud"  class="form-control">
                    </div> 
                </div> 
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text">Nro Registro</span>
                        <input type="text" name="numero_registro" id="numero_registro" class="form-control"size="40">
                    </div> 
                </div>
            
                <div class="col">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text">Edad</span>
                        <input type="text" name="edad" id="edad" class="form-control"size="12">
                    </div> 
                </div>
                <div class="col">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text">Sexo</span>
                        <input type="text" name="sexo" id="sexo" class="form-control"size="12">
                    </div> 
                </div>
            </div> 
            <div class="row mb-3">
                <div class="col">
                    <div class="input-group input-group-lg">   
                        <span class="input-group-text">Paciente</span>
                        <select name="paciente_id" id="paciente_id" class="form-control">
                        @foreach ($pacientes as $paciente)
                            <option value="{{$paciente->id}}">{{$paciente->nombre}}  {{$paciente->paterno}} {{$paciente->nombre}}  {{$paciente->paterno}}</option>
                            @endforeach
                        </select>
                    </div> 
                </div>

                <div class="col">
                    <div class="input-group input-group-lg">                
                        <span class="input-group-text">Celula Identidad</span>
                        <input type="text" name="ci" id="ci" class="form-control"size="40">
                    </div> 
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="input-group input-group-lg">                   
                        <span class="input-group-text">medico_id clinico</span>
                        <input type="text" name="diagnostico" id="diagnostico" class="form-control">
                    </div>
                </div>

                <div class="col">
                    <div class="input-group input-group-lg">                   
                        <span class="input-group-text">Medico Solicitante:</span>
                        <select name="medico_id" id="medico_id" class="form-control">
                            @foreach ($medicos as $medico)
                            <option value="{{$medico->id}}">{{$medico->nombre}} {{$medico->paterno}} {{$medico->materno}}</option>
                            @endforeach
                        </select>
                    </div> 
                </div>
            </div>

        </div>
    </div>
             
                <div class="card w-auto" >    
                    <div class="card-body" >
                            <div class="row container">
                                <label >Servicio a solicitar</label> 
                                  <br>
                            </div>
                        
                
                            <div class="row">
                                    <div class="col">
                                        <label for="">HEMATOLOGIA</label>
                                                @foreach ($servicios as $servicio)        
                                                    <div class="form-check">
                                                            @if ($servicio->Tipo=='HEMATOLOGÍA')
                                    
                                                                <td><input type="checkbox" name="select_process[]" class="select_process" value="{{$servicio->id}}"></td>                           
                                                            
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                    {{$servicio->nombre}}  
                                                                </label> <td>
                                                            
                                                            @endif
                                                    </div>
                            
                                                @endforeach
                                    </div>
                                    <div class="col">
                                        <label for="">BACTERIOLOGÍA</label>
                                            @foreach ($servicios as $servicio)        
                                                <div class="form-check">
                                                    @if ($servicio->Tipo=='BACTERIOLOGÍA')
                                                    <input class="form-check-input" type="checkbox" value="{{$servicio->nombre}}"name="analisis[]" id="flexCheckChecked" >
                                                    <input class="form-check-input" type="hidden" value="{{$servicio->id}}"name="analisisId[]"id="flexCheckChecked" >
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    {{$servicio->nombre}}  
                                                    </label>
                                                @endif
                                                </div>
                        
                                                @endforeach
                                    </div>
                                    <div class="col">
                                        <label for="">INMUNOLOGÍA SANGUÍNEA</label>
                                            @foreach ($servicios as $servicio)        
                                                <div class="form-check">
                                                    @if ($servicio->Tipo=='INMUNOLOGÍA SANGUÍNEA')
                                                    <input class="form-check-input" type="checkbox" value="{{$servicio->nombre}}"name="analisis[]" id="flexCheckChecked" >
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    {{$servicio->nombre}}  
                                                    </label>
                                                @endif
                                                </div>
                        
                                                @endforeach
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col">
                                        <label for="">MARCADORES TUMORALES</label>
                                            @foreach ($servicios as $servicio)        
                                                <div class="form-check">
                                                    @if ($servicio->Tipo=='MARCADORES TUMORALES')
                                                    <input class="form-check-input" type="checkbox" value="{{$servicio->nombre}}"name="analisis[]"id="flexCheckChecked" >
                                                    <input class="form-check-input" type="hidden" value="{{$servicio->id}}"name="analisisId[]"id="flexCheckChecked" >
                                                
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    {{$servicio->nombre}}  
                                                    </label>
                                                @endif
                                                </div>
                        
                                        @endforeach
                                    </div>
                                    <div class="col">
                                        <label for="">PARASITOLOGÍA</label>
                                            @foreach ($servicios as $servicio)        
                                                <div class="form-check">
                                                    @if ($servicio->Tipo=='PARASITOLOGÍA')
                                                <input class="form-check-input" type="checkbox" value="{{$servicio->nombre}}"name="analisis[]"id="flexCheckChecked" >
                                                <input class="form-check-input" type="hidden" value="{{$servicio->id}}"name="analisisId[]"id="flexCheckChecked" >
                                                
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    {{$servicio->nombre}}  
                                                </label>
                                                @endif
                                                </div>
                        
                                            @endforeach
                                    </div>
                                    <div class="col">
                                        <label for="">PERFIL HORMONAL</label>
                                            @foreach ($servicios as $servicio)        
                                                <div class="form-check">
                                                    @if ($servicio->Tipo=='PERFIL HORMONAL')
                                                <input class="form-check-input" type="checkbox" value="{{$servicio->nombre}}"name="analisis[]"id="flexCheckChecked" >
                                            
                                                <input class="form-check-input" type="hidden" value="{{$servicio->id}}"name="analisisId[]"id="flexCheckChecked" >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    {{$servicio->nombre}}  
                                                </label>
                                                @endif
                                                </div>
                        
                                            @endforeach
                                    </div>
                            </div>
                    </div>

                
                </div> 
                <input type="submit" value="Guardar orden" id="guar" class="btn btn-success" >
            </form>
        
           {{--  <form id="guardartodo" >
                <button type="submit" class="btn btn-primary">
                    Guardar Todo
                </button>
            </form> --}}
        </div>
     </div>

</div>

@stop


<!-- niveltipocuenta java scrip mas ajax-->
<script>{{time();}}</script>

<script>
    //ACTUALIZAR UN REGISTRO
    $('#guardartodo').submit(function(e){
        e.preventDefault();
        var c=1;
        var n="";
        while (c<=n) {
        /* var t="#"+"form"+c; */
        var tipo = $("#red_id").val();
        var id = $("#municipio_id").val();
        
        var id = $("#establecimiento_id").val();
        var id = $("#fecha_solicitud").val();
        var id = $("#municipio_id").val();
        var id = $("#municipio_id").val();
        var _token2 = $("input[name=_token]").val();
        var link="{{asset('')}}"+"tipoNivel/update/";
        
        $.ajax({
            url: link,
            type: "POST",
            data:{
                id:id,
                tipo:tipo,
                _token:_token2
            },
            success:function(response){
                if(response){
                    toastr.info('El registro nivel fue actualizado correctamente.', 'Actualizar Registro', {timeOut:3000})        
                }
            }

        })
        
       }
       var link2="{{asset('')}}"+"tipoNivel";
     
       $.ajax({
            url: link2,      
            success:function(resp){
    
                $("#contenido").html(resp);
               
            }
        })
        
    });
  </script>
  
  <!-- end niveltipocuenta java scrip mas ajax-->
