@extends('layouts.sidebarauth')

@section('contenido')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Productos
                            @can('productos.create')
                                <a href="{{route('productos.create')}}" class="btn btn-sm btn-primary pull-right-align">
                                    Crear
                                </a>
                            @endcan
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
                                    <th>UNIDAD</th>
                                    <th>INVENTARIO INICIAL</th>
                                    <th>INGRESOS</th>
                                    <th>SALIDAS</th>
                                    <th>STOCK</th>
                                    <th colspan="3">&nbsp;</th>
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
                                       <td>{{$producto->UNIDAD}}</td>
                                       <td>{{$producto->stockCantidadFecha('2019/12/31','<')-$producto->cantidadEntregado('2019/12/31','<')}}</td>
                                       <td>{{$producto->stockCantidadFecha(now(),'<')-$producto->stockCantidadFecha('2019/12/31','<')}}</td>
                                       <td>{{$producto->cantidadEntregado(now(),'<')-$producto->cantidadEntregado('2019/12/31','<')}}</td>
                                       <td>{{$producto->STOCK}}</td>
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