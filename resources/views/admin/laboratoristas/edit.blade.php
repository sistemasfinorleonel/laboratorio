
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($laboratorista,['route' => ['laboratoristas.update',$laboratorista],'method'=>'put']) !!}
        
        @include('admin.laboratoristas.form')
        
            {!! Form::submit('Actualizar personal de laboratorio', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop