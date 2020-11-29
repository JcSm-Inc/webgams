@extends('layouts.sidebarauth')

@section('contenido')

<section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="flex content-between items-center">
                <h2 class="text-2xl font-semibold pr-5 leading-tight">Mis comunicados</h2>
                @can('productos.create')
                    <a href="{{route('comunicados.create')}}" class="">
                        <div class="flex items-center rounded-full p-2 px-2 h-10  text-green-800 hover:text-green-100  bg-green-100 hover:bg-green-500">
                            
                            <i class="fas fa-plus  text-md items-center px-2"></i>
                            <h1 class="text-bold">Crear Comunicado</h1>
                        </div>
                    </a>
                @endcan
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th width="10px" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Imagen
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> TITULO</th>     
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">DESCRIPCION</th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ESTADO</th>
                                <th colspan="3" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comunicados as $comunicado)
                                <tr>
                                    <td class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                        <img src="{{asset($comunicado->ARCHIVO)}}" alt="User Avatar" class="img-size-51 mr-3 img-circle ">
                                    </td>
                                   <td class="px-5 py-0 border-b border-gray-200 bg-white text-sm">{{$comunicado->TITULO}}</td> 
                                   <td class="px-5 py-0 border-b border-gray-200 bg-white text-sm">{{$comunicado->DESCRIPCION}}</td>
                                   <td class="px-5 py-0 border-b border-gray-200 bg-white text-sm">
                                       <div class="flex items-center">
                                            @if ($comunicado->ESTADO=='BORRADOR')
                                                <span
                                                class="relative inline-block  px-3 py-1 font-semibold text-red-800 leading-tight">
                                                <span aria-hidden
                                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                            @else
                                                <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-800 leading-tight">  
                                                <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>  
                                            @endif
                                                <span class="relative">{{$comunicado->ESTADO}}</span>
                                            </span>

                                       </div>
                                       
                                    </td>
                                   <td width="10px" class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('comunicados.show',$comunicado->slug)}}" class="">
                                            <div class="flex items-center rounded-full p-2 h-10 w-10 text-green-800 hover:text-green-100  bg-green-100 hover:bg-green-500">
                                                
                                                <i class="far fa-eye  text-lg items-center"></i>
                                                
                                            </div>
                                        </a>
                                    </td>
                                   <td width="10px" class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{ route('comunicados.edit',$comunicado)}}" class="nav-link">
                                        <div class="flex items-center rounded-full px-2.5 h-10 w-10 text-blue-800 hover:text-blue-100  bg-blue-100 hover:bg-blue-500">
                                            <i class="far fa-edit text-lg items-center"></i>
                                        </div>
                                        </a>
                                   </td>
                                   <td width="10px" class="px-0 py-0 border-b border-gray-200 bg-white text-sm">
                                        {!!
                                            Form::open(['route' => ['comunicados.destroy',$comunicado->id],
                                            'method' => 'DELETE'])
                                        !!}
                                            <button class="flex items-center rounded-full px-2.5 h-10 w-10 text-red-800 hover:text-red-100  bg-red-100 hover:bg-red-500">
                                                <i class="far fa-trash-alt text-lg"></i>
                                            </button>
                                        {!! Form::close() !!}
                                   </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$comunicados->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection