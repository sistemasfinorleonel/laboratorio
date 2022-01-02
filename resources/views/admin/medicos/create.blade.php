@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'medicos.store']) !!}
         @include('admin.medicos.form')
            
           {!! Form::submit('crear tipo de prendas', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop