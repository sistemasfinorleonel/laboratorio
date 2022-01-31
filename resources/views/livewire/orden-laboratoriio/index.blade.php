<div>
    <div class="card">
        <div class="card-header">

<h1>Listado de Orden Laboratorio</h1>
<div>
    <a href="{{ route('ordens.create') }}"  class="btn btn-primary">Agregar Nuevo Registro</a>
</div>
      <div class="row">
    <div class="col-5">
        <span>Fecha de Inicio</span>
<input  wire:keydown="limpiar_page" wire:model ="search_ini"
class="form-control" placeholder="Escriba un nombre .." type="date"></div>
<div class="col-5">
    <span>Fecha de Final</span>
    <input wire:keydown="limpiar_page" wire:model ="search_fin"class="form-control"
placeholder="Escriba un nombre .." type="date"></div>
</div>
        </div>
        
        @if ($ordens->count())
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>#</th>
                         <th> Nompre Paciente</th>
                         <th>Email</th>
                         <th>Medico</th>
                         <th>Fecha</th>
                         <th></th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($ordens as $orden)
                         <tr>
                             <td>{{$orden->id}}</td>
                             <td>{{paciente($orden->paciente_id)->nombre}}
                             <br>{{paciente($orden->paciente_id)->paterno}}
                             <br>{{paciente($orden->paciente_id)->materno}}</td>
                             <td>{{user(paciente($orden->paciente_id)->user_id)->email}}</td>
                             <td>Dr(a):{{medico($orden->medico_id)->nombre}}
                               <br> {{medico($orden->medico_id)->paterno}}</td>
                             <td>{{$orden->fecha}}</td>
                  {{--            <td>{{$orden->}}</td>
                             <td>{{$orden->}}</td>
                             <td>{{$orden->}}</td> --}}
                             <td>{{$orden->id}}</td>
                             
                            <td width="10px">
                                    <a class="btn-primary" href="{{ route('pdforden.mostrar',['servicio'=>$orden]) }}">imprimir</a>
                                    <a class="btn-primary" href="{{ route('ordens.show',$orden->id) }}">Masinfo</a>
                            </td>
                         </tr>
                     @endforeach
                 </tbody>
     
             </table>
             </div>
     
             <div class="card-footer">
{{--                  {{$ordens->links()}}
 --}}             </div>
         
         @else
            <div class="card-body">
                     <strong> No hay  ningun registro</strong>
            </div>
        @endif
        
     </div>
         
</div>
