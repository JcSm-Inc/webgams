@extends('layouts.sidebarauth')

@section('contenido')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        REPORTE EXISTENCIAS O SALDO DE LOS PRODUCTOS
                    </div>
    
                    <div class="card-body">
                        <div>
                            @can('productos.create')
                                <a href="{{route('reporte_almacen.index')}}" class="btn btn-sm btn-primary pull-right-align">
                                    <i class="fas fa-print">Resumen de Consolidado por Producto</i>
                                </a>
                                <a href="{{route('reporte_almacen.consolidadoProducto')}}" class="btn btn-sm btn-primary pull-right-align">
                                    <i class="fas fa-print">Despachos Clasificados por producto</i>
                                </a>
                                <a href="{{route('reporte_almacen.consolidadoProducto')}}" class="btn btn-sm btn-primary pull-right-align">
                                    <i class="fas fa-print">Reporte de todos los despachos clasificados por Usuario</i>
                                </a>
                                <a href="{{route('reporte_almacen.consolidadoProducto')}}" class="btn btn-sm btn-primary pull-right-align">
                                    <i class="fas fa-print">Imprimir Productos</i>
                                </a>
                            @endcan
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th  width="10px">
                                        IMAGEN
                                    </th>
                                    <th  width="10px"> CODPROD </th>     
                                    <th>NOMBRE</th>
                                    <th>DESCRIPCION</th>
                                    <th >UNIDAD</th>
                                    <th >CANTIDAD O SALDO</th>
                                    <th colspan="3"></th>
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
                                       <td>{{$producto->DESCRIPCION}}</td>
                                       <td>{{$producto->UNIDAD}}</td>
                                       <td>{{$producto->STOCK}}</td>
                                       <td>
                                            <a href="{{route('reporte_almacen.ingresoPeriodoFechas',$producto)}}" class="btn btn-sm btn-primary pull-right-align">
                                                <i class="fas fa-print">Ingresos por fecha</i>
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