
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($servicios,['route' => ['medicos.update',$servicios],'method'=>'put']) !!}
        
        @include('admin.servicios.form')
        
            {!! Form::submit('Actualizar servicios', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop