<?php

namespace App\Http\Controllers;

use App\Models\DetalleReserva;
use Illuminate\Http\Request;

class DetalleReservaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(DetalleReserva $detalleReserva)
    {
        //
    }

    public function edit(DetalleReserva $detalleReserva)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $detallereserva = DetalleReserva::find($id);
        $estado = $detallereserva->reserva->ESTADO;
        if ($estado == 'ELABORADO') {
            $detallereserva->update(['CANTIDAD' => $request[$id]]);
        }
        return back()->with('info', 'Actualizado correctamente');
    }

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
            if ($detallereserva->reserva->ESTADO == 'ELABORADO') {
                $detallereserva->delete();
                return back()->with('info', 'Eliminado correctamente');
            } else return back()->with('info', 'Ya no se puede eliminar');
        } catch (\Exception $ex) {
            return back()->with('info', 'Error inesperado al Eliminar (no se elimino)');
        }
    }
}
