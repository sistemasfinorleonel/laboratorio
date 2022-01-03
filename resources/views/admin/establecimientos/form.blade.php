<div class="form-group">
    {!! Form::label('municipio_id',' municipio_id') !!}
    <select name="municipio_id" id="municipio_id">
        @foreach ($municipios as $municipio)
            <option value="{{$municipio->id}}">{{$municipio->nombre}}</option>
        @endforeach
    </select>
        @error('municipio')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('red_id',' red_id') !!}
    <select name="red_id" id="red_id">
        @foreach ($redes as $red)
            <option value="{{$red->id}}">{{$red->nombre}}</option>
        @endforeach
    </select>
        @error('red')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>


<div class="form-group">
    {!! Form::label('nombre','nombre') !!}
    {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'ingrese  el nombre del establecimiento']) !!}
        @error('nombre')
        <span class="text-danger">{{$message}}</span>
        @enderror

</div>

<div class="form-group">
    {!! Form::label('esta_area','esta_area') !!}
    {!! Form::text('esta_area',null , ['class'=>'form-control','placeholder'=>'ingrese  el area del establecimiento']) !!}
        @error('esta_area')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('nivel','nivel') !!}
    {!! Form::number('nivel',null , ['class'=>'form-control','placeholder'=>'ingrese  el nivel del establecimiento']) !!}
        @error('nivel')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('tipo','tipo') !!}
    {!! Form::date('tipo',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo del establecimiento']) !!}
        @error('tipo')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>
