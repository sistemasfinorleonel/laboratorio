@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de nuevo paciente</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'pacientes.store']) !!}
         @include('admin.pacientes.form')
            
           {!! Form::submit('Guardar datos', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop