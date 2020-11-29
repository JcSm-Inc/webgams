@extends('layouts.sidebar')

@section('contenido')
<!-- component -->
<div class="container mx-auto max-w-screen-lg mx-auto bg-opacity-50">
   

    <div class="mt-36">

      <div class="mb-4 md:mb-0 w-full mx-auto static">
        <div class="items-end text-right">
            <span class="text-green-600 text-sm text-bold ">{{(new Carbon\Carbon($comunicado->FECHA))->isoFormat('LL')}}</span>
        </div>
        <div class="px-4 lg:px-0">
          <h2 class="text-4xl font-semibold text-bold text-gray-800 leading-tight">
            {{$comunicado->TITULO}}
          </h2>
          <div class="flex py-2 mb-2">
            <h3 class="text-gray-600 text-bold px-2">Categoria:</h3>
            <a 
                href="{{route('comunicados.categoria',$comunicado->CATEGORIA)}}"
                class=" text-blue-600 text-bold"
            >
                {{$comunicado->CATEGORIA}}
            </a>
          </div>
          
        </div>

        <img src="{{asset($comunicado->ARCHIVO)}}" class="w-full object-cover lg:rounded" style="height: 28em;"/>
      </div>

      <div class="flex flex-col lg:flex-row lg:space-x-12">
        <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
            <div class="text-bold italic p-4">
                {{$comunicado->DESCRIPCION}}
            </div>
            <div>
            {!!$comunicado->CONTENIDO!!}
            </div>

        </div>

        <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
            
          <div class="p-4 border-t border-b md:border md:rounded">
            <div class="text-center text-bold text-gray-800">
                <h2>Datos de Autor</h2>
            </div>
            <div class="flex py-2">
              <img src="{{ asset($comunicado->personal_de_planta->user->FOTO) }}"
                class="h-10 w-10 rounded-full mr-2 object-cover" />
              <div>
                <p class="font-semibold text-gray-700 text-sm"> {{$comunicado->personal_de_planta->user->NOMBRES.' '.$comunicado->personal_de_planta->user->APELLIDOS}} </p>
                <p class="font-semibold text-gray-600 text-xs"> {{$comunicado->personal_de_planta->CARGO}} </p>
              </div>
            </div>
            <div class="flex py-3">
                <h3 class="text-gray-700 text-bold px-2">Email:</h3>
                <p class="text-gray-400 px-2 pt-1 text-xs">
                    {{$comunicado->personal_de_planta->user->email}}
                </p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>




@endsection