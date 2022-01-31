
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($paciente,['route' => ['pacientes.update',$paciente],'method'=>'put']) !!}
        
        @include('admin.pacientes.form')
        
            {!! Form::submit('Actualizar datos del paciente', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop