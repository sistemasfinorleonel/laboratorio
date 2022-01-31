<div class="form-group">
    {!! Form::label('nombre','Nombre del examen') !!}
    {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'Registre el nombre del examen']) !!}

    @error('nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('edad_ini','Edad inicial') !!}
    {!! Form::number('edad_ini',null , ['class'=>'form-control','placeholder'=>'Registre la edad inicial']) !!}
@error('edad_ini')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('edad_fin','Edad final') !!}
    {!! Form::number('edad_fin',null , ['class'=>'form-control','placeholder'=>'Registre el rando de edad']) !!}
@error('edad_fin')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('sexo','Sexo') !!}
    <select name="sexo" id="sexo">
        
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
    </select>

    @error('sexo')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('unidad_medida','Unidad de medida') !!}
    {!! Form::text('unidad_medida',null , ['class'=>'form-control','placeholder'=>'Establezca una unidad de medida']) !!}
@error('unidad_medida')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('rango_ini','Rango inicial') !!}
    {!! Form::number('rango_ini',null , ['class'=>'form-control','placeholder'=>'Registre el rango inicial del examen']) !!}
@error('rango_ini')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('nombre','Rango final') !!}
    {!! Form::number('rango_fin',null , ['class'=>'form-control','placeholder'=>'Registre el rango final']) !!}
@error('rango_fin')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('nombre','Nombre del servicio') !!}
    <select name="servicio_id" id="servicio_id">
        <option value="{{isset($examen->servicio->nombre)?$examen->servicio->nombre:""}}">{{isset($examen->servicio->nombre)?$examen->servicio->nombre:""}}</option>
     
        @foreach ($servicios as $servicio)
            <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
        @endforeach
    </select>@error('nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

