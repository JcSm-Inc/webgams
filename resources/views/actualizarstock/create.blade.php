@extends('layouts.sidebarauth')

@section('contenido')
{{Session::forget('producto')}}
{{Session::put('producto',$producto)}}
<div class="container-fluid">
    <div class="row justify-content-center">
        {!! Form::open(['route' => 'actualizarstock.store','Method'=>'POST','novalidate']) !!}
        @csrf
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="font-weight-bold">AGREGAR PRODUCTO A EXISTENCIAS</h3>
                            </div>
                            <div class="card-body">
                                @include('actualizarstock.partials.form')
                            </div>
                            
                                    
                        </div>
                    </div>
                    
        {!! Form::close() !!}
    </div>
</div>
@endsection