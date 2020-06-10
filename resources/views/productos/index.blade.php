@extends('layouts.sidebarauth')

@section('contenido')
<section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td>
                                        <img src="{{asset('storage/'.$producto->FOTO)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
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
</section>
@endsection