

@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')











<div  class="container py-4">

.<div class="card">
    <div class="card-header text-center">
    SOLICITUD DE  EXAMEN DE
    <br>
     LABORATORIO ,IMAGENOLOGIA/GABINETE 
    <br>
        O SERVICIOs DE SANGRE
    </div>
    <form class="form-inline" action="" method="post">
         
            <div class="form-group">
            <label for="pw">Red</label>
            <input type="text" name="" id=""class="form-control"size="55">
            
            <label for="">Municipio</label>
            <input type="text" name="" id=""class="form-control" size="55">
            </div> 
            <div class="text-center "><label for=""size="10">D-8</label></div>
            
           <div class="form-group">
               
            <label for="">Establecimiento</label>
            <input type="text" name="" id="" class="form-control"size="120">
           </div> 
           <div class="form-group">
               
            <label for="">fecha solicitud</label>
            <input type="date" name="" id="" class="form-control">
           </div> 
           <div class="form-group">
               
            <label for="">Nro Registro</label>
            <input type="text" name="" id="" class="form-control"size="40">
           </div> 
           <div class="form-group">
               
            <label for="">Edad</label>
            <input type="text" name="" id="" class="form-control"size="12">
           </div> 
           <div class="form-group">
               
            <label for="">Sexo</label>
            <input type="text" name="" id="" class="form-control"size="12">
           </div> 
            
           <div class="form-group">
               
            <label for="">Nombres</label>
            <input type="text" name="" id="" class="form-control"size="70">
           </div> 
           <div class="form-group">
               
            <label for="">Celula Identidad</label>
            <input type="text" name="" id="" class="form-control"size="40">
           </div> 
           <div class="form-group">
               
            <label for="">Diagnostico clinico</label>
            <input type="text" name="" id="" class="form-control"size="125">
           </div> 
            
            
            

         
    
        <input type="submit" value="" >
    </form>

    <div class="card w-auto" >    
        <div class="card-body" >
         <div class="row">
            <form name="form" id="form" method="POST" action="">
            @csrf 
            <label >Servicio </label> 
            <select id="formTipo_nivel"  name="form" required>
             @foreach ($servicios as $servicio)
            <div >
                <div class="col-3">
                    <option value="">{{$servicio->nombre}}</option>
                </div>
            </div>
            @endforeach
        </select>   
        <input id="form" type="submit" value="Agregar">
     </form>
   
         </div>

</div>
</div>


<div class="card w-auto" >    
    <div class="card-body" >
     <div class="row">
       
        <label >Servicio </label> 
        

         @foreach ($servicios as $servicio)
         <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
            
                {{$servicio->nombre}}
            </label>
          </div>

        @endforeach
   
    <input id="form" type="submit" value="Agregar">
 </form>

     </div>

</div>
</div>
</div>
@stop
{{-- 

<!-- niveltipocuenta java scrip mas ajax-->
<script>{{time();}}</script>

<script>
    //ACTUALIZAR UN REGISTRO
    $('#prueba').submit(function(e){
        e.preventDefault();
        var c=1;
        var n="{{$contador}}";
        while (c<=n) {
        var t="#"+"form"+c;
        var tipo = $(t+"Tipo_nivel").val();
        var id = $(t+"id_nivel").val();
        var _token2 = $("input[name=_token]").val();
        var link="{{asset('')}}"+"tipoNivel/update/"+id;
        
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
        c++;
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
   --}}
