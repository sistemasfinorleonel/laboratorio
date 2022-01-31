@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar nuevo personal</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'laboratoristas.store']) !!}
         @include('admin.laboratoristas.form')
            
           {!! Form::submit('crear tipo de prendas', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop