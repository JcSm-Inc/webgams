<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\User;
use App\Models\DetalleReserva;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('reservaProducto/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $usuario = User::find(Auth::user()->id);
        $pdp = $usuario->personal_de_planta;
        $reserva = Reserva::create(
            [
                'FECHARESERVA' => now(),
                'idPERSONAL_DE_PLANTA' => $pdp->id,
                'ESTADO' => 'ACTIVO'
            ]
        );
        $productos = $request['productos'];
        foreach ($productos as $producto) {
            $cantidad = min($producto['cantidad'], Productos::productoDisponible($producto['id']));
            $detallereserva = DetalleReserva::create([
                'CANTIDAD' => $producto['cantidad'],
                'idRESERVA' => $reserva->id,
                'idPRODUCTOS' => $producto['id']
            ]);
        }

        $detalle = $reserva->detallereserva;
        return response($detalle);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
