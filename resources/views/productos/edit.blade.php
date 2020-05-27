@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card bg-primary">
                
                <div class="card-header">
                    Producto
                </div>

                <div class="card-body">
                   {!! Form::model($producto,['route' => ['productos.update',$product->id],
                    'method' => 'PUT']) !!}
                        @include('productos.partials.form')
                    {!! Form::close() !!}
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection