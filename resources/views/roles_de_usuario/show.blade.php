@extends('layouts.sidebarauth')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuario</div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $user->NOMBRES.' '.$user->APELLIDOS }}</p>
                    <p><strong>Email</strong>      {{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection