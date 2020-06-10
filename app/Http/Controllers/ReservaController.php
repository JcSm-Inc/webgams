<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\User;
use App\Models\DetalleReserva;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

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
                'ESTADO' => 'ELABORADO'
            ]
        );
        $productos = $request['productos'];
        foreach ($productos as $producto) {
            $cantidad = min($producto['cantidad'], Productos::productoDisponible($producto['id']));
            if ($cantidad > 0) {
                $detallereserva = DetalleReserva::create([
                    'CANTIDAD' => $cantidad,
                    'idRESERVA' => $reserva->id,
                    'idPRODUCTOS' => $producto['id']
                ]);
            }
        }

        $detalle = $reserva->detallereserva;
        return response()->json(compact('reserva', 'detalle'));
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
    public function edit(Reserva $reservas)
    {
        $detalle = $reservas->detallereserva;
        return view('reservaProducto.edit', compact('reservas', 'detalle'));
    }

    /**
     * Actualizacion de la tabla reserva
     */
    public function update(Request $request, $id)
    {
        $usuario = User::find(Auth::user()->id);
        $reserva = Reserva::find($id);
        if ($reserva->idPERSONAL_DE_PLANTA == $usuario->personal_de_planta->id) {
            $reserva->update(['ESTADO' => 'ACTIVO']);

            $detallereserva = $reserva->detallereserva;
            $pdf = PDF::loadView('reservaProducto/pdf/reservaproductos', compact('reserva', 'detallereserva'))->setPaper('letter');
            return $pdf->download('reservaproductos.pdf');
            //return back()->with('info', 'Actualizado correctamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $reserva = Reserva::find($id);

            if ($reserva == false) {
                return back()->with('info', 'No existe el registro');
            } else {
                $estado = $reserva->ESTADO;
                if ($estado == 'ELABORADO') {
                    $reserva->delete();
                    return redirect('home')->with('info', 'Eliminado correctamente');
                } else return back()->with('info', 'Ya se envio la reserva no se puede eliminar');
            }
        } catch (\Exception $ex) {
            return back()->with('info', 'Error inesperado al Eliminar (no se elimino)');
        }
    }
}
