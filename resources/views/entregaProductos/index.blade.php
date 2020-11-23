@extends('layouts.sidebarauth')

@section('contenido')
<section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Lista de Reserva de Productos
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px"> Fecha de Reservacion </th>     
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($entregas as $entrega)
                                <tr>
                                   <td>{{$entrega->FECHARESERVA}}</td> 
                                   <td>{{$entrega->personal_de_planta->user->NOMBRES.' '.$entrega->personal_de_planta->user->APELLIDOS}}</td>
                                   <td width="10px">
                                       <a href="{{ route('entregas.create',compact('entrega'))}}" class=" btn btn-xs btn-outline-success">
                                        <i class="fas fa-cart-arrow-down">Entregar</i>
                                        </a>
                                    </td>
                                   <td width="10px">
                                        {!!
                                            Form::open(['route' => ['reserva.destroy',$entrega->id],
                                            'method' => 'DELETE'])
                                        !!}
                                            <button class="btn btn-xs  btn-block btn-outline-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        {!! Form::close() !!}
                                   </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$entregas->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection