<div class="form-group">
    {!! Form::label('nombre','nombre') !!}
    {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}

    @error('nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('edad_ini','edad_ini') !!}
    {!! Form::number('edad_ini',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('edad_ini')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('edad_fin','edad_fin') !!}
    {!! Form::number('edad_fin',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('edad_fin')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('sexo','sexo') !!}
    <select name="sexo" id="sexo">
        
            <option value="Masculino">masculino</option>
            <option value="Femenino">femenino</option>
    </select>

    @error('sexo')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('unidad_medida','unidad_medida') !!}
    {!! Form::text('unidad_medida',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('unidad_medida')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('rango_ini','rango_ini') !!}
    {!! Form::number('rango_ini',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('rango_ini')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('rango_fin','rango_fin') !!}
    {!! Form::number('rango_fin',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('rango_fin')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

