@extends('layouts.sidebarauth')

@section('contenido')
<div class="container-fluid">
    <div class="row justify-content-center">
        {!! Form::model($actualizarStock,['route' => ['actualizarstock.update',$actualizarStock->id],'method'=>'PUT']) !!}
        @csrf
        @method('PUT')
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="font-weight-bold">EDITAR INGRESO A EXISTENCIAS</h3>
                            </div>
                            <div class="card-body">

                                @if ($errors->any())
                                    <p>Hay errores!</p> 
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                @include('actualizarstock.partials.form')
                            </div>
                            
                                    
                        </div>
                    </div>
                    
        {!! Form::close() !!}
    </div>
</div>


@endsection