<div class="form-group">
    {!! Form::label('ci','Carnet') !!}
    {!! Form::text('ci',null , ['class'=>'form-control','placeholder'=>'Ingrese su numero de ci']) !!}

</div>
<div class="form-group">
    {!! Form::label('Nombre','Nombre') !!}
    {!! Form::text('Nombre',null , ['class'=>'form-control','placeholder'=>'Ingrese su nombre']) !!}

    @error('Nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('paterno','Apellido paterno') !!}
    {!! Form::text('paterno',null , ['class'=>'form-control','placeholder'=>'Ingrese  su apellido paterno']) !!}
@error('paterno')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('materno','Apellido materno') !!}
    {!! Form::text('materno',null , ['class'=>'form-control','placeholder'=>'Ingrese su apellido materno']) !!}
@error('materno')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('telefono','Telefono') !!}
    {!! Form::number('telefono',null , ['class'=>'form-control','placeholder'=>'Ingrese un numero de telefono de referencia']) !!}
@error('telefono')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('fecha_nacimiento','Fecha de nacimiento') !!}
    {!! Form::date('fecha_nacimiento',null , ['class'=>'form-control','placeholder'=>'Ingrese la fecha de nacimiento']) !!}
@error('fecha_nacimiento')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('edad','Edad') !!}
    
    {!! Form::number('edad',null , ['class'=>'form-control','placeholder'=>'Ingrese la edad del paciente']) !!}
@error('edad')
<span class="text-danger">{{$message}}</span>
@enderror
</div>



<div class="form-group">
    {!! Form::label('sexo','Sexo') !!}
    <select name="sexo" id="sexo">
        
            <option value="Masculino">masculino</option>
            <option value="Femenino">femenino</option>
    </select>

    @error('sexo')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('direccion','Direccion') !!}
    {!! Form::text('direccion',null , ['class'=>'form-control','placeholder'=>'Ingrese la direccion del paciente']) !!}
@error('direccion')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

</div>
<div class="form-group">
    {!! Form::label('user_id',' Usuario') !!}
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