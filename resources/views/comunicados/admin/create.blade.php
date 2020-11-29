@extends('layouts.sidebarauth')

@section('contenido')
<!-- component -->
<div class="w-full static m-2 shadow-2xl rounded my-24">
    {!! Form::open(['route' => 'comunicados.store','enctype'=>'multipart/form-data','novalidate']) !!}
    @csrf
    <div class="top h-64 w-full bg-blue-600 overflow-hidden relative" >
      <img id="blah" src="{{asset('extras/tmp/comunicado.png')}}" alt="" class="bg w-full h-full object-fill object-center absolute z-0">
      <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
        <div class="p-2 md:w-30 ">
            <label class="flex items-center p-4 bg-green-400 bg-opacity-70 hover:bg-opacity-70 rounded-lg shadow-xs cursor-pointer hover:bg-green-500 hover:text-gray-100">
                
                <svg class="h-6 fill-current hover:text-gray-100" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" class="svg-inline--fa fa-camera fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"></path></svg>
                  <p class=" text-xs font-medium ml-2 ">
                    Subir Imagen
                  </p>
                  <input type="file" name="FOTO" id="FOTO" style="display: none;">
            </label>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12 bg-white ">
  
      <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-12">
        <div class="px-4 pt-4">
          <form action="#" class="flex flex-col space-y-8">
  
            <div>
              <h3 class="text-2xl font-semibold">Nuevo Comunicado</h3>
              <hr>
            </div>
            @include('comunicados.admin.partials.form')
   
          </form>
        </div>
      </div>
  
  
    </div>
    {!! Form::close() !!}
  </div>

@endsection