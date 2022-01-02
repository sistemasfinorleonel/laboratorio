<div class="form-group">
    {!! Form::label('ci','ci') !!}
    {!! Form::text('ci',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}

</div>
<div class="form-group">
    {!! Form::label('nombre','nombre') !!}
    {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}

    @error('nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('paterno','paterno') !!}
    {!! Form::text('paterno',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('paterno')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('materno','materno') !!}
    {!! Form::text('materno',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('materno')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('telefono','telefono') !!}
    {!! Form::number('telefono',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('telefono')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('fecha_nacimiento','fecha_nacimiento') !!}
    {!! Form::date('fecha_nacimiento',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('fecha_nacimiento')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('edad','edad') !!}
    
    {!! Form::number('edad',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('edad')
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
    {!! Form::label('direccion','direccion') !!}
    {!! Form::text('direccion',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('direccion')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

</div>
<div class="form-group">
    {!! Form::label('user_id',' user_id') !!}
    <select name="user_id" id="user_id">
        <option value="{{isset($paciente->user->email)?$paciente->user->email:""}}">{{isset($paciente->user->email)?$paciente->user->email:""}}</option>
           @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select>
@error('email')
<span class="text-danger">{{$message}}</span>
@enderror
</div>