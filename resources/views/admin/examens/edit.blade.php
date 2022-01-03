
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($examen,$referencia,['route' => ['examens.update',$medico],'method'=>'put']) !!}
        
        @include('admin.examens.form')
        
            {!! Form::submit('actualizar tipo de examens', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop