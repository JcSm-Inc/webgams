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
                    <img src="{{asset($producto->FOTO)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
                    <p><strong>CODIGO DE PRODUCTO:</strong>{{$producto->CODPROD}}</p>
                    <p><strong>NOMBRE:</strong>{{$producto->NOMBRE}}</p>
                    <p><strong>DESCRIPCION:</strong>{{$producto->DESCRIPCION}}</p>
                    <p><strong>TIPO:</strong>{{$producto->TIPO}}</p>
                    <p><strong>STOCK:</strong>{{$producto->STOCK}}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    HISTORIAL DE ACTUALIZACION DE STOCK
                </div>

                <div class="card-body">
                <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">
                                    FECHA ACTUALIZACION
                                </th>
                                <th width="10px"> CANTIDAD </th>     
                                <th>NRO DOC</th>
                                <th>PU</th>
                                <th>CANTIDAD</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actualizaciones as $stock)
                                <tr>
                                    <td>
                                        <img src="{{asset($producto->FOTO)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
                                    </td>
                                   <td>{{$producto->CODPROD}}</td> 
                                   <td>{{$producto->NOMBRE}}</td>
                                   <td width="10px">
                                       <a href="{{ route('productos.show',$producto)}}" class="nav-link">
                                        <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                   <td width="10px">
                                    <a href="{{ route('productos.edit',$producto)}}" class="nav-link">
                                        <i class="far fa-edit"></i>
                                        </a>
                                   </td>
                                   <td width="10px">
                                        {!!
                                            Form::open(['route' => ['productos.destroy',$producto],
                                            'method' => 'DELETE'])
                                        !!}
                                            <button class="btn btn-xs  btn-block btn-outline-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        {!! Form::close() !!}
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
@endsection