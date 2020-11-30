@extends('layouts.sidebarauth')

@section('contenido')
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        RESUMEN DE CONSOLIDADO POR PRODUCTO
                            @can('productos.create')
                                <a href="{{route('reporte_almacen.consolidadoProducto')}}" class="btn btn-sm btn-primary pull-right-align">
                                    <i class="fas fa-print">Imprimir</i>
                                </a>
                            @endcan
                    </div>
    
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th  rowspan="2" width="10px">
                                        IMAGEN
                                    </th>
                                    <th  rowspan="2" width="10px"> CODPROD </th>     
                                    <th rowspan="2">NOMBRE</th>
                                    <th  rowspan="2">UNIDAD</th>
                                    <th colspan="2">INVENTARIO INICIAL</th>
                                    <th colspan="2">INGRESOS</th>
                                    <th colspan="2">SALIDAS</th>
                                    <th>STOCK</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                                <tr>
                                    
                                    <th>UNID.</th>
                                    <th>PRECIO</th>
                                    <th>UNID.</th>
                                    <th>PRECIO</th>
                                    <th>UNID.</th>
                                    <th>PRECIO</th>
                                    <th>UNID.</th>
                                    <th>PRECIO</th>
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
                                       <td>{{($producto->stockPrecioFecha('2019/12/31','<')-$producto->stockPrecioEntregadoPeriodo('2019/12/31').' Bs.')}}</td>
                                       <td>{{$producto->stockCantidadFecha(now(),'<')-$producto->stockCantidadFecha('2019/12/31','<')}}</td>
                                       <td>{{($producto->stockPrecioFecha(now(),'<')-$producto->stockPrecioFecha('2019/12/31','<')).' Bs.'}}</td>
                                       <td>{{$producto->cantidadEntregado(now(),'<')-$producto->cantidadEntregado('2019/12/31','<')}}</td>
                                       <td>{{($producto->stockPrecioEntregadoPeriodo(now())-$producto->stockPrecioEntregadoPeriodo('2019/12/31')).' Bs.'}}</td>
                                       <td>{{$producto->STOCK}}</td>
                                       <td>{{($producto->stockPrecioFecha(now(),'<')-$producto->stockPrecioEntregadoPeriodo(now())).' Bs.'}}</td>
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