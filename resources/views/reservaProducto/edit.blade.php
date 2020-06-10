@extends('layouts.sidebarauth')

@section('contenido')
<div class="container">

    <div class="card">
        <div class="card-header">
            Reserva de Productos
        </div>

        <div class="card-body">
            <div>
            <p>ID:{{$reservas->id}}</p>
            <p>Fecha de reserva:{{$reservas->FECHARESERVA}}</p>
            <p>Estado:{{$reservas->ESTADO}}</p>
            </div>
            
            <table class="table table-striped table-hover">
                <thead class="text-center">
                    <tr>
                        <th width="10px">
                            CODPROD
                        </th>
                        <th  width="10px"> NOMBRE </th>     
                        <th>DESCRIPCION</th>
                        <th>CANTIDAD</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($detalle as $item)
                        <tr>
                           <td class="text-center">{{$item->productos->CODPROD}}</td>
                           <td>{{$item->productos->NOMBRE}}</td>
                           <td>{{$item->productos->DESCRIPCION}}</td>
                           <td>
                            {!!
                                Form::open(['route' => ['detallereserva.update',$item->id],
                                'method' => 'PUT'])
                            !!}
                                <select id="{{$item->id}}" name="{{$item->id}}" class="custom-select custom-select-sm" onchange='this.form.submit()'>
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
                            {!! Form::close() !!}  
                            </td> 
                           <td width="10px">
                                {!!
                                    Form::open(['route' => ['detallereserva.destroy',$item],
                                    'method' => 'DELETE'])
                                !!}
                                    <button class="btn btn-sm  btn-block btn-outline-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                {!! Form::close() !!}
                           </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row row-cols-1 row-cols-2">
                <div class="col mb-4">
                    {!!
                        Form::open(['route' => ['reserva.update',$reservas->id],
                        'method' => 'PUT'])
                    !!}
                        <button class="btn btn-xs  btn-block btn-outline-light-blue">   
                            <i class="fas fa-print"></i>
                            Imprimir Pedido
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
                            Eliminar Pedido
                        </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection