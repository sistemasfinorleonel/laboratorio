@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
@stop

@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($detalleexamen,['route' => ['detalleexamens.update',$detalleexamen],'method'=>'put']) !!}
        
        @include('detalleexamens.form')
        
            {!! Form::submit('actualizar tipo de medicos', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop
