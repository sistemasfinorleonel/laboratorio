
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($prenda,['route' => ['prendas.update',$prenda],'method'=>'put']) !!}
        
        @include('prendas.partials.form')
        
            {!! Form::submit('actualizar tipo de prendas', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
@stop