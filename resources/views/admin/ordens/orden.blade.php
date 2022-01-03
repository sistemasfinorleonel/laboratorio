

@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')











<div  class="container py-4">

<div class="card">
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
                <label for="pw">Red</label>
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
                <select name="red_id" id="red_id">
                    @foreach ($establecimientos as $establecimiento)
                        <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}}</option>
                    @endforeach
                </select> 
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
                    
                                <option value="">{{$servicio->nombre}}</option>
                    
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
                 <br>
                </div>
            
       
            <div class="row">
                     <div class="col">
                         <label for="">HEMATOLOGIA</label>
                                @foreach ($servicios as $servicio)        
                                  <div class="form-check">
                                      @if ($servicio->Tipo=='HEMATOLOGÍA')
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                     <label class="form-check-label" for="flexCheckChecked">
                                      {{$servicio->nombre}}  
                                     </label>
                                    @endif
                                    </div>
            
                                 @endforeach
                      </div>
                      <div class="col">
                        <label for="">BACTERIOLOGÍA</label>
                               @foreach ($servicios as $servicio)        
                                 <div class="form-check">
                                     @if ($servicio->Tipo=='BACTERIOLOGÍA')
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
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
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
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
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
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
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
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
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                           <label class="form-check-label" for="flexCheckChecked">
                            {{$servicio->nombre}}  
                           </label>
                          @endif
                          </div>
  
                       @endforeach
            </div>



        </div>
     </div>
{{-- <div class="row"><input id="form" type="hideen" value="Agregar"></div>
    --}} 
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
