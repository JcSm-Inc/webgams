@extends('layouts.sidebar')

@section('contenido')
<section class="blog text-gray-700 body-font">
    <div class="container px-3 py-2 mx-auto">
      <div class="flex flex-wrap w-full mb-4 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> NOTICIAS</h1>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    
                            @foreach($comunicados as $comunicado)
                                <div class="mx-auto  max-w-xs ">
                                    <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide " >
                                        <div class="md:flex-shrink-0">
                                            <img src="{{asset($comunicado->ARCHIVO)}}" alt="mountains" class="w-full h-48 rounded-lg rounded-b-none">
                                        </div>
                                        <div class="px-4 py-2 mt-2">
                                            <div class="items-end text-right">
                                                <span class="text-green-600 text-xs text-bold ">{{(new Carbon\Carbon($comunicado->FECHA))->isoFormat('LL')}}</span>
                                            </div>
                                            <h2 class="font-bold text-2xl text-gray-800 tracking-normal">{{$comunicado->TITULO}}</h2>
                                                <p class="text-sm text-gray-700 px-2 mr-1 text-justify">
                                                    {{$comunicado->DESCRIPCION}}
                                                </p>
                                                <div class="flex items-center justify-between mt-2 mx-4">
                                                <a href="{{route('comunicados.comunicado',$comunicado->slug)}}" class="text-blue-500 text-xs -ml-3 ">Leer mas...</a>
                                                    <p class="flex text-xs text-right text-bold text-blue-500">
                                                        {{$comunicado->CATEGORIA}}
                                                    </p>
                                                </div>
                                            <div class="author flex items-center -ml-3 my-3">
                                                <div class="user-logo">
                                                    <img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="{{ asset($comunicado->personal_de_planta->user->FOTO) }}" alt="avatar">
                                                </div>
                                                <h2 class="text-sm tracking-tighter text-gray-900">
                                                    <a href="#">{{$comunicado->personal_de_planta->user->NOMBRES.' '.$comunicado->personal_de_planta->user->APELLIDOS}}</a> 
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    {{$comunicados->render()}}
                
            </div>
</section>
@endsection