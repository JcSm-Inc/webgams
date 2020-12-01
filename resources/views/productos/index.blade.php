@extends('layouts.sidebarauth')

@section('contenido')

<section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="flex content-between items-center">
                <h2 class="text-2xl text-white font-semibold pr-5 leading-tight" style="text-shadow: 0 20px 50px hsla(0,0%,0%,8);">
                    Productos
                </h2>
                        @can('productos.create')
                            <a href="{{route('productos.create')}}" class="">
                                <div class="flex items-center rounded-full p-2 px-2 h-10  text-green-800 hover:text-green-100  bg-green-100 hover:bg-green-500">
                            
                                    <i class="fas fa-plus  text-md items-center px-2"></i>
                                    <h1 class="text-bold">Agregar Nuevo Producto</h1>
                                </div>
                            </a>
                        @endcan
            </div>
            <div class="relative w-full p-2 m-2 ">
                <!-- FORMULARIO BUSCAR 
                        <form class="form-inline ml-2"> -->
                            {!! Form::Open(['route'=>['productos.index'],'method'=>'GET','class'=>'form-inline ml-2'])!!}
                            <div class="input-group input-group-sm absolute inset-y-0 right-0">
                                {!! Form::text('buscar','', ['class'=>'form-control','placeholder'=>'Buscar por Nombre']) !!}
                                <!--<input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">-->
                                <div class="input-group-append">
                                    <button class="btn btn-navbar -mt-0 mr-3" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                <!--   </form>-->
                </div>
            <div class="-mx-4  px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden bg-gray-200 bg-opacity-70 text-bold">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th width="10px" class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Imagen
                                </th>
                                <th  class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> CODPROD </th>     
                                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">NOMBRE</th>
                                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">DESCRIPCION</th>
                                <th colspan="3" class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                        <img src="{{asset($producto->FOTO)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
                                    </td>
                                   <td class="px-0 py-0 border-b border-gray-200 bg-white text-sm">{{$producto->CODPROD}}</td> 
                                   <td class="px-0 py-0 border-b border-gray-200 bg-white text-sm">{{$producto->NOMBRE}}</td>
                                   <td class="px-0 py-0 border-b border-gray-200 bg-white  text-xs">{{$producto->DESCRIPCION}}</td>
                                   <td width="10px" class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                    @can('productos.show')   
                                        <a href="{{ route('productos.show',$producto)}}" class="nav-link">
                                        <div class="flex items-center rounded-full p-2 h-10 w-10 text-green-800 hover:text-green-100  bg-green-100 hover:bg-green-500">
                                                
                                            <i class="far fa-eye  text-lg items-center"></i>
                                            
                                        </div>
                                        </a>
                                    @endcan
                                    </td>
                                   <td width="10px" class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                    @can('productos.edit')
                                        <a href="{{ route('productos.edit',$producto)}}" class="nav-link">
                                        <div class="flex items-center rounded-full px-2.5 h-10 w-10 text-blue-800 hover:text-blue-100  bg-blue-100 hover:bg-blue-500">
                                            <i class="far fa-edit text-lg items-center"></i>
                                        </div>
                                        </a>
                                    @endcan
                                   </td>
                                   <td width="10px" class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                       @can('productos.destroy')
                                        {!!
                                            Form::open(['route' => ['productos.destroy',$producto],
                                            'method' => 'DELETE'])
                                        !!}
                                            <button class="flex items-center rounded-full px-2.5 h-10 w-10 text-red-800 hover:text-red-100  bg-red-100 hover:bg-red-500">
                                                <i class="far fa-trash-alt text-lg"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
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