<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\actualizarStock;
use App\Models\Entrega;
use App\Models\Pesonal_de_Planta;
use App\Models\User;
use App\Models\DetalleEntrega;
use Illuminate\Support\Facades\Date;
use PDF;

class reporteAlmacenController extends Controller
{
    //-----------------MUESTRA TODOS LOS PRODUCTOS-----------------------------------------
    public function index()
    {
        $productos = Productos::paginate(10);
        return view('reporte_almacen/index', ['productos' => $productos]); //response(compact('productos'));
    }
    public function imprimirConsolidadoProductos()
    {
        $productos = Productos::all();
        $pdf = PDF::loadView('reporte_almacen/pdf/consolidadoProductos', compact('productos'))->setPaper('letter', 'landscape');
        $pdf->getDomPDF()->set_option("enable_php", true);
        return $pdf->download('ReporteConsolidadoProductos.pdf');
    }
    public function saldoExistenciasProducto()
    {
        $productos = Productos::paginate(10);
        return view('reporte_almacen/saldoExistenciasProducto', ['productos' => $productos]);
    }
    public function ingresoPeriodoFechas(Productos $producto)
    {
        $request = app('request');
        $fechaini = 0;
        $fechafin = now();
        if (isset($request['fechafin']) == true && $request['fechafin'] != '') {
            if (isset($request['fechaini']) == true && $request['fechaini'] != '') {
                $fechaini = $request->get('fechaini');
                $fechafin = $request->get('fechafin');
            } else $fechafin = $request->get('fechafin');
        }
        $actualizaciones  = actualizarStock::where('FECHA', '>=', date("Y-m-d", strtotime($fechaini)))->where('FECHA', '<=', date("Y-m-d", strtotime($fechafin)))
            ->where('idPRODUCTO', $producto->id)->GET();
        return view('reporte_almacen/ingresoPeriodoFechas', compact('producto', 'actualizaciones', 'fechaini', 'fechafin'));
    }
    public function imprimirIngresoPeriodoFechas(Request $request)
    {
        //$request = app('request');
        $fechaini = 0;
        $fechafin = now();
        $producto = Productos::find($request->get('producto'));
        if (isset($request['fechafin']) == true && $request['fechafin'] != '') {
            if (isset($request['fechaini']) == true && $request['fechaini'] != '') {
                $fechaini = $request->get('fechaini');
                $fechafin = $request->get('fechafin');
            } else $fechafin = $request->get('fechafin');
        }
        $actualizaciones  = actualizarStock::where('FECHA', '>=', date("Y-m-d", strtotime($fechaini)))->where('FECHA', '<=', date("Y-m-d", strtotime($fechafin)))
            ->where('idPRODUCTO', $producto->id)->GET();

        $pdf = PDF::loadView('reporte_almacen/pdf/ingresoPeriodoFechas', compact('producto', 'actualizaciones', 'fechaini', 'fechafin'))->setPaper('letter');
        $pdf->getDomPDF()->set_option("enable_php", true);
        return $pdf->download('Reporte Ingreso Periodo Fechas.pdf');
    }
}
