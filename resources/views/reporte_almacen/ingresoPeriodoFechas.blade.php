@extends('../layouts/sidebarauth')

@section('contenido')
<div class="container">       
    <div class="row ">
                <div class="col-12 ">
                    <div class="card">
                        <div class=" text-center text-bold card-header">
                            PRODUCTO
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" width="150" height="150">
                                    <img src="{{asset($producto->FOTO)}}" alt="User Avatar" class="w-100 h-100 img-size-50 mr-3 img-circle ">
                                </div>
                                <div class="col-8">
                                    <p><strong>CODIGO DE PRODUCTO:</strong>{{' '.$producto->CODPROD}}</p>
                                    <p><strong>NOMBRE:</strong>{{' '.$producto->NOMBRE}}</p>
                                    <p><strong>DESCRIPCION:</strong>{{' '.$producto->DESCRIPCION}}</p>
                                    <p><strong>UNIDAD:</strong>{{' '.$producto->UNIDAD}}</p>
                                    <p><strong>TIPO:</strong>{{' '.$producto->TIPO}}</p>
                                    <p><strong>STOCK:</strong>{{' '.$producto->STOCK}}</p>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-12">
            <div class="card">
                <div class="card-header text-bold text-center">
                    INGRESOS DE PRODUCTO 
                    <a href="{{route('reporte_almacen.imprimirIngresoPeriodoFechas',['producto'=>$producto,'actualizaciones'=>$actualizaciones,'fechaini'=>$fechaini,'fechafin'=>$fechafin])}}" class="btn btn-sm btn-primary pull-right-align">
                        <i class="fas fa-print">Imprimir</i>
                    </a>
                </div>

                <div class="card-body">
                    <div class="align-right">
                    <!-- FORMULARIO BUSCAR 
                            <form class="form-inline ml-2"> -->
                                {!! Form::Open(['route'=>['reporte_almacen.ingresoPeriodoFechas',$producto],'method'=>'GET','class'=>'form-inline ml-2'])!!}
                                <div class="input-group input-group-sm">
                                    {!! Form::text('fechaini','', ['class'=>'form-control','placeholder'=>'Fecha Inical (dd/mm/aaaa)']) !!}
                                    {!! Form::text('fechafin','', ['class'=>'form-control','placeholder'=>'Fecha Final (dd/mm/aaaa)']) !!}
                                    <!--<input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">-->
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                    <!--   </form>-->
                    </div>
                <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    FECHA
                                </th>   
                                <th>NRO DOC</th>
                                <th>PROVEEDOR</th>
                                <th>P.U.[Bs]</th>
                                <th>CANTIDAD</th>
                                <th>SUBTOTAL [Bs]</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $cantTotal=0;
                                $precioTotal=0;
                            @endphp
                            
                            @foreach($actualizaciones as $stock)
                                <tr>
                                    <td>{{$stock->FECHA}}</td>
                                   <td>{{$stock->NRO_DOCUMENTO}}</td> 
                                   <td>{{$stock->PROVEEDOR}}</td>
                                   <td>{{$stock->PU}}</td>
                                   <td>{{$stock->CANTIDAD}}</td>
                                   <td>{{$stock->CANTIDAD*$stock->PU}}</td>
                                   @php
                                        $cantTotal=$cantTotal+$stock->CANTIDAD;
                                        $precioTotal=$precioTotal+$stock->CANTIDAD*$stock->PU;
                                    @endphp
                                   
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3"></td>
                                <td>TOTALES</td>
                                <td>{{$cantTotal}}</td> 
                                <td>{{$precioTotal.' Bs'}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection