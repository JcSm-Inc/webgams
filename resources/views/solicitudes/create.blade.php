@extends('layouts.sidebarauth')

@section('contenido')
<div class="container">
    {!! Form::open(['route' => 'solicitud.store','enctype'=>'multipart/form-data','novalidate']) !!}
    @csrf
    <div class=" my-5 py-5 z-depth-1">
        <h3 class="font-weight-bold">Nueva hoja de ruta</h3>
        @include('solicitudes.partials.form')  
        
    </div>
    {!! Form::close() !!}
</div>
@endsection