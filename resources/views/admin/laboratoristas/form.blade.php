<div class="form-group">
    {!! Form::label('ci','Carnet') !!}
    {!! Form::text('ci',null , ['class'=>'form-control','placeholder'=>'Ingresar numero de carnet']) !!}

</div>
<div class="form-group">
    {!! Form::label('nombre','Nombre') !!}
    {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'Ingrese el nombre']) !!}

    @error('nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('paterno','Apellido Paterno') !!}
    {!! Form::text('paterno',null , ['class'=>'form-control','placeholder'=>'Ingrese el apellido paterno']) !!}
@error('paterno')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('materno','Apellido Materno') !!}
    {!! Form::text('materno',null , ['class'=>'form-control','placeholder'=>'Ingrese el apellido materno']) !!}
@error('materno')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('telefono','Telefono') !!}
    {!! Form::number('telefono',null , ['class'=>'form-control','placeholder'=>'Ingrese numero de telefono']) !!}
@error('telefono')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('fecha_nacimiento','Fecha de nacimiento') !!}
    {!! Form::date('fecha_nacimiento',null , ['class'=>'form-control','placeholder'=>'Registre fecha de nacimiento']) !!}
@error('fecha_nacimiento')
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
    {!! Form::text('direccion',null , ['class'=>'form-control','placeholder'=>'Ingrese la direccion']) !!}
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