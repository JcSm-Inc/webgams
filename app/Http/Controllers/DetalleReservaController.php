<?php

namespace App\Http\Controllers;

use App\Models\DetalleReserva;
use Illuminate\Http\Request;

class DetalleReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleReserva  $detalleReserva
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleReserva $detalleReserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleReserva  $detalleReserva
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleReserva $detalleReserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleReserva  $detalleReserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detallereserva = DetalleReserva::find($id);
        $estado = $detallereserva->reserva->ESTADO;
        if ($estado == 'ELABORADO') {
            $detallereserva->update(['CANTIDAD' => $request[$id]]);
        }
        return back()->with('info', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleReserva  $detalleReserva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $detallereserva = DetalleReserva::find($id);
            if ($detallereserva == false) {
                return response()->json([
                    'ok' => false,
                    'error' => 'No se encontro el Productos'
                ]);
            }
            $detallereserva->delete();
            return back()->with('info', 'Eliminado correctamente');
        } catch (\Exception $ex) {
            return back()->with('info', 'Error inesperado al Eliminar (no se elimino)');
        }
    }
}
