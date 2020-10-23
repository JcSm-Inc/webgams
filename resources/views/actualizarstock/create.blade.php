@extends('layouts.sidebarauth')

@section('contenido')
<div class="container">
    {!! Form::open(['route' => 'actualizarstock.store','enctype'=>'multipart/form-data','novalidate']) !!}
    @csrf
                <div class="col-lg-6 mb-4 mb-lg-0">
                    
                    <div class="px-4">
                        <h3 class="font-weight-bold">Agregar producto a Existencias</h3>
                                @include('actualizarstock.partials.form')  
                    </div>
                </div>
                
    {!! Form::close() !!}
</div>
@endsection