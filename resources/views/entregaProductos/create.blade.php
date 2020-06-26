@extends('layouts.sidebarauth')

@section('contenido')
{{Session::forget('reserva')}}
{{Session::forget('detallereserva')}}
{{Session::put('reserva',$reservas)}}
{{Session::put('detallereserva',$detalle)}}
<div class="container">

    <div class="card">
        <div class="card-header">
            Entrega de Productos
        </div>

        <div class="card-body">
            <div>
            <p>ID:{{$reservas->id}}</p>
            <p>Fecha de reserva:{{$reservas->FECHARESERVA}}</p>
            <p>Estado:{{$reservas->ESTADO}}</p>
            </div>
            {!!
                Form::open(['route' => array('entregas.store')])
            !!}
            <table class="table table-striped table-hover">
                <thead class="text-center">
                    <tr>
                        <th width="10px">
                            CODPROD
                        </th>
                        <th  width="10px"> NOMBRE </th>     
                        <th>DESCRIPCION</th>
                        <th>CANTIDAD</th>
                        <th>DISPONIBLE</th>
                        <th>OPCION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($detalle as $item)
                        <tr>
                           <td class="text-center">{{$item->productos->CODPROD}}</td>
                           <td>{{$item->productos->NOMBRE}}</td>
                           <td>{{$item->productos->DESCRIPCION}}</td>
                           <td>
                                <select id="{{$item->id}}" name="{{$item->id}}" class="custom-select custom-select-sm">
                                    <option selected>{{$item->CANTIDAD}}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>   
                            </td> 
                            <td class="text-center">{{$item->productos->STOCK}}</td>
                           <td>
                            <select id="{{"opcion".$item->id}}" name="{{"opcion".$item->id}}" class="custom-select custom-select-sm">
                                <option value ="1" selected>Entregar</option>
                                <option value="0">Omitir</option>
                            </select> 
                           </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row row-cols-1 row-cols-2">
                <div class="col mb-4">
                    
                        <button class="btn btn-xs  btn-block btn-outline-light-blue">   
                            <i class="fas fa-print"></i>
                            Imprimir Entrega
                        </button>
                    {!! Form::close() !!}
                </div>
                <div class="col mb-4">
                    {!!
                        Form::open(['route' => ['reserva.destroy',$reservas],
                        'method' => 'DELETE'])
                    !!}
                        <button class="btn btn-xs  btn-block btn-outline-danger">
                            <i class="far fa-trash-alt"></i>
                            Eliminar Entrega
                        </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection