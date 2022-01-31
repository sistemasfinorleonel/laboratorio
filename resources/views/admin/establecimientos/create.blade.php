@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar nuevo establecimiento</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'establecimientos.store']) !!}
         @include('admin.establecimientos.form')
            
           {!! Form::submit('Crear Establecimientos', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop