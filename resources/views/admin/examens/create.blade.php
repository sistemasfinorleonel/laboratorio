@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'examens.store']) !!}
         @include('admin.examens.form')
            
           {!! Form::submit('Crear nuevo examen', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop