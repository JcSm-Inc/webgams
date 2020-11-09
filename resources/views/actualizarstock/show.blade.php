@extends('../layouts/sidebarauth')

@section('contenido')
<div class="container">       
    <div class="row ">
                <div class="col-lg-6 ">
                    <div class="card">
                        <div class="card-header">
                            Producto
                        </div>

                        <div class="card-body">
                            <img src="{{asset($producto->FOTO)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
                            <p><strong>CODIGO DE PRODUCTO:</strong>{{$producto->CODPROD}}</p>
                            <p><strong>NOMBRE:</strong>{{$producto->NOMBRE}}</p>
                            <p><strong>DESCRIPCION:</strong>{{$producto->DESCRIPCION}}</p>
                            <p><strong>TIPO:</strong>{{$producto->TIPO}}</p>
                            <p><strong>STOCK:</strong>{{$producto->STOCK}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    {{Session::forget('producto')}}
                    {{Session::put('producto',$producto)}}
                            {!! Form::open(['route' => 'actualizarstock.store','Method'=>'POST','novalidate']) !!}
                            @csrf
                                            <div class="card">
                                                <div class="card-header">
                                                    Agregar Existencias
                                                </div>
                                                <div class="card-body">
                                                    @include('actualizarstock.partials.form')
                                                </div>
                                                
                                                        
                                            </div>
                                        </div>
                                        
                            {!! Form::close() !!}
                </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-11">
            <div class="card">
                <div class="card-header">
                    HISTORIAL DE ACTUALIZACION DE STOCK
                </div>

                <div class="card-body">
                <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">
                                    FECHA
                                </th>   
                                <th>NRO DOC</th>
                                <th>PROVEEDOR</th>
                                <th>PU</th>
                                <th>CANTIDAD</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actualizaciones as $stock)
                                <tr>
                                    <td>{{$stock->FECHA}}</td>
                                   <td>{{$stock->NRO_DOCUMENTO}}</td> 
                                   <td>{{$stock->PROVEEDOR}}</td>
                                   <td>{{$stock->PU}}</td>
                                   <td>{{$stock->CANTIDAD}}</td>
                                   <td width="10px">
                                    <a href="{{ route('actualizarstock.edit',$stock)}}" class="nav-link">
                                        <i class="far fa-edit"></i>
                                        </a>
                                   </td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection