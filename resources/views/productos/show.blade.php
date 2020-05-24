@extends('../layouts/sidebarauth')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Producto
                </div>

                <div class="card-body">
                    <img src="{{'.'.$producto->FOTO}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
                    <p><strong>CODIGO DE PRODUCTO:</strong>{{$producto->CODPROD}}</p>
                    <p><strong>NOMBRE:</strong>{{$producto->NOMBRE}}</p>
                    <p><strong>DESCRIPCION:</strong>{{$producto->DESCRIPCION}}</p>
                    <p><strong>TIPO:</strong>{{$producto->TIPO}}</p>
                    <p><strong>STOCK:</strong>{{$producto->STOCK}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection