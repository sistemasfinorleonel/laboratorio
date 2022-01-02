
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($establecimiento,['route' => ['establecimientos.update',$establecimiento],'method'=>'put']) !!}
        
        @include('admin.establecimientos.form')
        
            {!! Form::submit('actualizar el establecimiento', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop