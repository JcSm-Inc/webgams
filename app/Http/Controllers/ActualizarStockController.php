<?php

namespace App\Http\Controllers;

use App\Models\actualizarStock;
use App\Models\Productos;
use Illuminate\Http\Request;

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
     * @param  \App\actualizarStock  $actualizarStock
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $producto)
    {

        return view('actualizarstock/show', ['producto'=>$producto]);
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
        //
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
