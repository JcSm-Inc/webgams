<?php

namespace App\Http\Controllers;

use App\Models\actualizarStock;
use App\Models\Productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarStock;
use Illuminate\Support\Facades\Auth;

class ActualizarStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->get('buscar');
        $productos = Productos::Nombres($id)->paginate(10);

        return view('actualizarstock/index', ['productos' => $productos]);
        //response(compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Productos $producto)
    {
        return view('actualizarstock/create', ['producto' => $producto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarStock $request)
    {
        $producto = $request->session()->get('producto');
        $cantidad = $request['CANTIDAD'];
        $actualizarStock = actualizarStock::create(
            [
                'idPRODUCTO' => $producto->id,

                'idUSER' => Auth::user()->id,
                'CANTIDAD' => $cantidad,
                'FECHA' => now(),
                'NRO_DOCUMENTO' => $request['NRO_DOCUMENTO'],
                'PU' => $request['PU'],
                'PROVEEDOR' => $request['PROVEEDOR']


            ]
        );
        $producto->update([
            'STOCK' => ($producto->STOCK + $cantidad),
        ]);
        return redirect()->route('actualizarstock.edit', $actualizarStock->id)
            ->with('info', 'Producto guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actualizarStock  $actualizarStock
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $producto)
    {
        $id = $producto->id;
        $actualizaciones  = actualizarStock::where('idPRODUCTO', $id)->GET();
        return view('actualizarstock/show', ['producto' => $producto, 'actualizaciones' => $actualizaciones]);
        //return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\actualizarStock  $actualizarStock
     * @return \Illuminate\Http\Response
     */
    public function edit(actualizarStock $actualizarStock)
    {
        return view('actualizarstock.edit', compact('actualizarStock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\actualizarStock  $actualizarStock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, actualizarStock $actualizarStock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\actualizarStock  $actualizarStock
     * @return \Illuminate\Http\Response
     */
    public function destroy(actualizarStock $actualizarStock)
    {
        //
    }
}
