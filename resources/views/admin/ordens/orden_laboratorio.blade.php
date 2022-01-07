@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<div class="card w-auto" > 
    <div class="row">
       <div class="col">
        <img src="http://creadictivo.com/wp-content/uploads/2018/05/Escudo-de-Bolivia-Nuevo.jpg" width="200" class="" alt="">
        </div> 
        <div class="col text-center">
            <h3>SOLICITUD DE  EXAMEN DE </h3>
             <br>
            <h3> LABORATORIO,IMAGENOLOGIA/GABINETE </h3>
             <br>
                 <h3>O SERVICIOs DE SANGRE</h3>
         </div>
         <div class="col">
            <img src="https://es.news-front.info/wp-content/uploads/2019/03/Bolivia-salud-SUS.jpg" width="200" class="" alt="">
            </div>
   </div>
   
<form class="form-inline" action="" method="post">
         
    <div class="form-group">
        <label for="red">Red</label>
        <select name="red_id" id="red_id">
            @foreach ($reds as $red)
                <option value="{{$red->id}}">{{$red->nombre}}</option>
            @endforeach
        </select> 
    </div>
    <div class="form-group">
        <label for="">Municipio</label>
        <select name="municipio_id" id="municipio_id">
            @foreach ($municipios as $municipio)
                <option value="{{$municipio->id}}">{{$municipio->nombre}}</option>
            @endforeach
        </select> 
    </div> 
    <div class="text-center "><label for=""size="10">D-8</label></div>
    
    <div class="form-group">
        <label for="">Establecimiento</label>
        <select name="establecimiento_id" id="establecimiento_id">
            @foreach ($establecimientos as $establecimiento)
                <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}}</option>
            @endforeach
        </select> 
    </div> 

    <div class="form-group">
       
        <label for="">fecha solicitud</label>
        <input type="date" name="fecha_solicitud" id="fecha_solicitud" class="form-control">
    </div> 

    <div class="form-group">
       
        <label for="">Nro Registro</label>
        <input type="text" name="numero_registro" id="numero_registro" class="form-control"size="40">
    </div> 

    <div class="form-group">
       
        <label for="">Edad</label>
        <input type="text" name="edad" id="edad" class="form-control"size="12">
    </div> 
    <div class="form-group">
       
        <label for="">Sexo</label>
        <input type="text" name="sexo" id="sexo" class="form-control"size="12">
    </div> 
    
    <div class="form-group">   
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control"size="70">
    </div> 

    <div class="form-group">
        
        <label for="">Celula Identidad</label>
        <input type="text" name="ci" id="ci" class="form-control"size="40">
    </div> 
    <div class="form-group">
       
        <label for="">Diagnostico clinico</label>
        <input type="text" name="diagnostico" id="diagnostico" class="form-control"size="125">
     </div> 
   <input type="submit" value="guardar" id=""> 
</form>       
    
@stop
 

