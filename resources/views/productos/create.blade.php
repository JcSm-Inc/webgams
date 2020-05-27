@extends('layouts.sidebarauth')

@section('contenido')
<div class="container">
    <div class="row my-5 py-5 z-depth-1">

            <div class="row">

                <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                    <div class="view overlay zoom">
                        <img src="https://mdbootstrap.com/img/Others/food.jpg" class="img-fluid" alt="">
                        <div class="mask flex-center">
                            <p class="white-text">Cambiar Imagen</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    
                    <div class="px-4">
                        <h3 class="font-weight-bold">Agregar Producto</h3>
                            {!! Form::open(['route' => 'productos.store']) !!}
                                @include('productos.partials.form')
                            {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
    </div>
</div>
@endsection