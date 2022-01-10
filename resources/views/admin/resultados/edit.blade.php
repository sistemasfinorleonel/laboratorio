
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<div class="card">
    <div class="card-body">
                                
            <div class="card-body">  
                
            <div class="row">
                <label for="">Edicion de Resultados</label>
            </div>
 
         @foreach ($detalleservicios as $detalleservicio)
           
            {{$idservices=$detalleservicio->servicio_id}}             
                {{--  
            @foreach ($services as $service)
               
            
            @if ($idservices==$services->id)
            {{$service->nombre}}
            @endif

            @endforeach
 --}}


                   
                        
            @foreach ($services as $service)
             
        @if ($idservices==$service['id'])
        <div class="row">
          
        <h2>  {{$service->nombre}}</h2>
        </div>  
                    @foreach ($examenes as $examen)
                        @if ($idservices==$examen['servicio_id'])
                      <div class="row">
                        <div class="col">
                            
                        {{$examen->nombre}} 
                    </div>
                    <div class="col">Referencia rango</div>
                    <div class="col"> {{$examen->referencia->edad_ini}}</div>
                    <div class="col">
                        {{$examen->referencia->unidad_medida}}  
                        </div>
                    --- 
                    <div class="col">{{$examen->referencia->edad_fin}}  </div>
                  
                    <div class="col">    {{$examen->referencia->unidad_medida}}</div> 
                    
                    <div class="col">
                        <input type="text" name="" id="">
                    </div>
                    </div>
                               
                    
                    
                        @endif
                    @endforeach
           
           
            @endif
           
            

            @endforeach       
            </div>
            
            @endforeach 
        
</div>

@stop 