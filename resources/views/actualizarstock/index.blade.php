@extends('layouts.sidebarauth')

@section('contenido')
<section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="flex content-between items-center">
                <h2 class="text-2xl text-white font-semibold pr-5 leading-tight" style="text-shadow: 0 20px 50px hsla(0,0%,0%,8);">
                    Actualizar Stock
                </h2>
            </div>
            <div class="relative w-full p-2 m-2 ">
                <!-- FORMULARIO BUSCAR 
                        <form class="form-inline ml-2"> -->
                            {!! Form::Open(['route'=>['actualizarstock.index'],'method'=>'GET','class'=>'form-inline ml-2'])!!}
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
                            <tr class="px-2 py-3 text-bold border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                <th width="10px" class="px-2 py-3">
                                    Imagen
                                </th>
                                <th width="10px" class="px-2 py-3"> CODPROD </th>     
                                <th class="px-2 py-3">NOMBRE</th>
                                <th class="px-2 py-3">STOCK</th>
                                <th colspan="2" class="px-2 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                    <td>
                                        <img src="{{asset($producto->FOTO)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
                                    </td>
                                   <td>{{$producto->CODPROD}}</td> 
                                   <td>{{$producto->NOMBRE}}</td>
                                   <td>{{$producto->STOCK}}</td>
                                   <td width="10px">
                                       <a href="{{ route('actualizarstock.show',$producto)}}" class="nav-link">
                                        <div class="flex items-center rounded-full px-2.5 h-10 w-10 text-blue-800 hover:text-blue-100  bg-blue-100 hover:bg-blue-500">
                                            <i class="fas fa-history text-lg"></i>
                                        </div>
                                        </a>
                                    </td>
                                    <td width="10px">
                                       <a href="{{ route('actualizarstock.create',$producto)}}" class="nav-link">
                                        <div class="flex items-center rounded-full p-2.5 h-10 w-10 text-green-800 hover:text-green-100  bg-green-100 hover:bg-green-500">
                                                
                                            <i class="fas fa-plus  text-lg items-center"></i>
                                            
                                        </div>
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
</div>
</section>
@endsection