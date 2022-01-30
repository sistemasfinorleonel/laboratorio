<div class="card">
    <div class="card-body">
        <div class="mb-3" wire:ignore>
            <label for="" class="form-label">Departamento</label>
            <select name="departamento_id" class="form-control" id="departamento_id" wire:model='departamento_id'>
                @if (is_null($departamento_id))
                    <option value="">Seleccione un Departamento</option>
                @endif
                @foreach (departamentos() as $departamento)
                    <option wire:click="$set('departamento_id',{{$departamento->id}})" value="{{$departamento->id}}">{{$departamento->nombre}} </option>
                @endforeach
            </select>
            <small id="helpId" class="text  -muted"></small>
        </div>
          {{$departamento_id}}
        @if ($departamento_id)
        <div class="mb-3" wire:ignore>
            <label for="" class="form-label">Provincia</label>
            <select name="" class="form-control" id="" wire:model='provincia_id'>
                @if (is_null($provincia_id))
                    <option value="">Seleccione un Provincia</option>
                @endif
                @foreach (provicias_idDpt($departamento_id) as $provincia)
                    <option value="{{$provincia->id}}">{{$provincia->nombre}} </option>
                @endforeach
            </select>
            <small id="helpId" class="text-muted"></small>
      
        </div>
           
    {{--     @if ($provincia_id)
        <div class="mb-3" wire:ignore>
            <label for="" class="form-label">Establecimiento</label>
            <select name="" class="form-control" id="" wire:model='establecimiento_id'>
                @if (is_null($establecimiento_id))
                    <option value="">Seleccione un Establecimiento</option>
                @endif
                @foreach (establecimiento_idProv($provincia_id) as $establecimiento)
                    <option value="{{$establecimiento->id}}">{{$establecimiento->nombre}} </option>
                @endforeach
            </select>
            <small id="helpId" class="text-muted"></small>
      
        </div>
           
        @endif --}}
        
        @endif
        
        
    </div>
</div>
                
