@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR ESTABLECIMIENTO</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'establecimientos.store']) !!}
         @include('admin.establecimientos.form')
            
           {!! Form::submit('crear Establecimientos', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop