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
                <div class="align-right">
                    <!-- FORMULARIO BUSCAR 
                            <form class="form-inline ml-2"> -->
                                {!! Form::Open(['route'=>['productos.index'],'method'=>'GET','class'=>'form-inline ml-2'])!!}
                                <div class="input-group input-group-sm">
                                    {!! Form::text('buscar','', ['class'=>'form-control','placeholder'=>'Buscar por Nombre']) !!}
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
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">
                                    Imagen
                                </th>
                                <th width="10px"> CODPROD </th>     
                                <th>NOMBRE</th>
                                <th>DESCRIPCION</th>
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
                                   <td>{{$producto->DESCRIPCION}}</td>
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