@extends('../layouts/sidebarauth')

@section('contenido')

<!-- component -->
<style>
    .w-70 {
      width: 20rem;
      }
  </style>
  


<div class="container">       
    <div class="row ">
                <div class="col-lg-6 ">

                    <div class="p-1 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                        <div class="bg-gray-300 h-56 w-56 rounded-full shadow-md bg-cover bg-center" style="background-image: url({{asset($producto->FOTO)}})"></div>
            
                        <div class=" w-70 bg-white -mt-16 shadow-lg rounded-lg overflow-hidden p-2">
                          
                          <div class="header-content inline-flex  p-1">
                              
                            <div class=" text-3xl text-bold text-center "> Producto</div>
                          </div>
                          <div class="title-post font-medium">CODIGO DE PRODUCTO</div>
            
                            <div class="summary-post text-sm text-justify">
                                {{$producto->CODPROD}}
                            </div>
                            <div class="title-post font-medium">NOMBRE</div>
            
                            <div class="summary-post text-sm text-justify">
                                {{$producto->NOMBRE}}
                            </div>
                            <div class="title-post font-medium">DESCRIPCION</div>
            
                            <div class="summary-post text-sm text-justify">
                                {{$producto->DESCRIPCION}}
                            </div>
                            <div class="title-post font-medium">TIPO</div>
            
                            <div class="summary-post text-sm text-justify">
                                {{$producto->TIPO}}
                            </div>
                            <div class="title-post font-medium">STOCK</div>
            
                            <div class="summary-post text-sm text-justify">
                                {{$producto->STOCK}}
                            </div>
                         
                        </div>
                      </div>
                </div>
                <div class="col-lg-6 justify-center items-center ">
                    {{Session::forget('producto')}}
                    {{Session::put('producto',$producto)}}
<!-- component -->

                    <div class="flex flex-col bg-white shadow-md px-4 sm:px-2 md:px-4 lg:px-10 py-4 rounded-md w-full max-w-md ">
                        <div class="font-medium self-center text-xl sm:text-2xl uppercase text-gray-800"> Agregar Existencias</div>
                        
                        <div class="mt-10">
                            {!! Form::open(['route' => 'actualizarstock.store','Method'=>'POST','novalidate']) !!}
                            @csrf
                            @include('actualizarstock.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
                                        
                            
            </div>
    <div class="row justify-content-center mt-2">
            <div class="col-11">
            <div class="card">
                <div class="flex card-header">
                    HISTORIAL DE INGRESO DEL PRODUCTO: <h3 class="text-bold"> {{' '.$producto->NOMBRE}}</h3>
                </div>

                <div class="card-body">
                <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">
                                    FECHA
                                </th>   
                                <th>NRO DOC</th>
                                <th>PROVEEDOR</th>
                                <th>PU</th>
                                <th>CANTIDAD</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actualizaciones as $stock)
                                <tr>
                                    <td>{{$stock->FECHA}}</td>
                                   <td>{{$stock->NRO_DOCUMENTO}}</td> 
                                   <td>{{$stock->PROVEEDOR}}</td>
                                   <td>{{$stock->PU}}</td>
                                   <td>{{$stock->CANTIDAD}}</td>
                                   <td width="10px">
                                    <a href="{{ route('actualizarstock.edit',$stock)}}" class="nav-link">
                                        <i class="far fa-edit"></i>
                                        </a>
                                   </td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection