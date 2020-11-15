<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\actualizarStock;
use App\Models\Entrega;
use App\Models\Pesonal_de_Planta;
use App\Models\User;
use App\Models\DetalleEntrega;


class reporte_almacen extends Controller
{
    //-----------------MUESTRA TODOS LOS PRODUCTOS-----------------------------------------
    public function index()
    {
        $fecha = now();
        $reporte1 = Productos::select('CODPROD', 'NOMBRE')->get();
        $reporte2 = actualizarStock::where('fecha', '<', $fecha);
        $productos = Productos::paginate(10);
        return view('productos/index', ['productos' => $productos]); //response(compact('productos'));
    }
}
