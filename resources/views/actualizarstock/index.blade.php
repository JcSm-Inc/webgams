@extends('layouts.sidebarauth')

@section('contenido')
<section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
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
                                <th>HIST. DE ACT.</th>
                                <th>AGREGAR</th>
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
                                       <a href="{{ route('actualizarstock.show',$producto)}}" class="btn btn-sm btn-warning pull-right-align">
                                        <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                    <td width="10px">
                                       <a href="{{ route('actualizarstock.create',$producto)}}" class="btn btn-sm btn-success pull-right-align">
                                       <i class="fas fa-plus-circle"></i>
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