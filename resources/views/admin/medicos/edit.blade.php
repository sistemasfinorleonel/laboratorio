
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($medico,['route' => ['medicos.update',$medico],'method'=>'put']) !!}
        
        @include('admin.medicos.form')
        
            {!! Form::submit('Actualizar datos del medico', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop