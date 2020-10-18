@extends('layouts.sidebarauth')

@section('contenido')
<section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Actualizar Stock
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">
                                    Imagen
                                </th>
                                <th width="10px"> CODPROD </th>     
                                <th>NOMBRE</th>
                                <th>CANTIDAD DISPONIBLE</th>
                                <th>HISTORIAL DE ACTUALIZACIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td>
                                        <img src="{{asset($producto->FOTO)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
                                    </td>
                                   <td>{{$producto->CODPROD}}</td> 
                                   <td>{{$producto->NOMBRE}}</td>
                                   <td>{{$producto->STOCK}}</td>
                                   <td width="10px">
                                       <a href="{{ route('actualizarstock.show',$producto)}}" class="nav-link">
                                        <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$productos->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection