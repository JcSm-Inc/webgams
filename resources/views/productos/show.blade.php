@extends('../layouts/sidebarauth')

@section('contenido')
<!-- component -->
<div class="py-16">
    <div class="container m-auto px-6">
  
     <div class="lg:flex justify-between items-center">
         <div class="lg:w-6/12 lg:p-0 p-7 bg-gray-700 rounded-lg">
            <h1 class="text-4xl text-gray-100 font-bold leading-tight mb-5 capitalize text-center">  Producto </h1>
            <div class="text-lg text-gray-100 p-3">
                <p><strong>CODIGO DE PRODUCTO:</strong>{{'  '.$producto->CODPROD}}</p>
                <p><strong>NOMBRE:</strong>{{'  '.$producto->NOMBRE}}</p>
                <p><strong>DESCRIPCION:</strong>{{'  '.$producto->DESCRIPCION}}</p>
                <p><strong>TIPO:</strong>{{'  '.$producto->TIPO}}</p>
                <p><strong>STOCK:</strong>{{'  '.$producto->STOCK}}</p>
            </div>
            <div class="py-5 px-2">
                @can('productos.edit')
                 <a href="{{ route('productos.edit',$producto)}}" class="text-white rounded-full py-2 px-5 text-lg font-semibold bg-purple-600 inline-block border border-purple-600 mr-3">Editar</a>
                 <a href="{{route('actualizarstock.show',$producto)}}" class="text-black rounded-full py-2 px-5 text-lg font-semibold bg-gray-400 inline-block border hover:bg-white hover:text-black">Agregar Existencias</a>
                 @endcan
            </div>
  
        </div>
          <div class="lg:w-5/12 order-2">
            <img src="{{asset($producto->FOTO)}}"
            style="transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);" alt="" class="rounded">
          </div>
      </div>
  
    </div>
  </div>

@endsection