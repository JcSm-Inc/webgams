@extends('layouts.sidebarauth')

@section('contenido')
<div class="container">
    {!! Form::open(['route' => 'productos.store','enctype'=>'multipart/form-data']) !!}
    @csrf
    <div class="row my-5 py-5 z-depth-1">

            <div class="row">

                <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                    <div class="view overlay zoom">
                        <img id="blah" src="{{asset('extras/tmp/producto.png')}}" class="img-fluid" alt="Producto">
                        <div class="mask flex-center">
                            <label class="btn btn-outline-success btn-file">
                            Subir imagen<input type="file" name="FOTO" id="FOTO" style="display: none;">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    
                    <div class="px-4">
                        <h3 class="font-weight-bold">Agregar Producto</h3>

                            @if ($errors->any())
                                <p>Hay errores!</p> 
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                                @include('productos.partials.form')
                            
                    </div>
                </div>
                
            </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection