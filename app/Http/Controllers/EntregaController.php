<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarEntrega;
use App\Models\DetalleEntrega;
use App\Models\Entrega;
use App\Models\Productos;
use App\Models\Reserva;
use Illuminate\Http\Request;
use PDF;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entregas = Reserva::where('ESTADO', '=', 'ACTIVO')
            ->orderBy('FECHARESERVA', 'asc')
            ->paginate(15);
        return view('entregaProductos/index', compact('entregas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request['entrega'];
        $reservas = Reserva::find($id);
        $detalle = $reservas->detallereserva;

        return view('entregaProductos/create', compact('reservas', 'detalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarEntrega $request)
    {
        $reserva = $request->session()->get('reserva');
        $detallereserva = $request->session()->get('detallereserva');
        $entrega = Entrega::create(
            [
                'FECHAENTREGA' => now(),
                'idPERSONAL_DE_PLANTA' => $reserva->idPERSONAL_DE_PLANTA,
                'ESTADO' => 'ENTREGADO'
            ]
        );
        $reserva->update(['ESTADO' => 'ENTREGADO']);
        $detalles = [];
        foreach ($detallereserva as $item) {
            if ($request["opcion" . $item->id] == '1') {
                $cantidad = min($request["" . $item->id], $item->productos->STOCK);
                $detalleEntrega = DetalleEntrega::create([
                    'CANTIDAD' => $cantidad,
                    'idENTREGA' => $entrega->id,
                    'idPRODUCTOS' => $item->idPRODUCTOS
                ]);
                array_push($detalles, $detalleEntrega);
                $Producto = Productos::find($item->idPRODUCTOS);
                $Producto->update(['STOCK' => ($Producto->STOCK - $cantidad)]);
            }
        }
        $pdf = PDF::loadView('entregaProductos/pdf/entregaproductos', compact('entrega', 'detalles'))->setPaper('letter');
        return $pdf->stream('entrega.pdf');
        dd($detalles);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function show(Entrega $entrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrega $entrega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrega $entrega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrega $entrega)
    {
        //
    }
}
