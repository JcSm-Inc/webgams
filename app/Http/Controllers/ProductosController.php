<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarProducto;
use App\Models\Productos;
use Illuminate\Broadcasting\Channel;
//use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Validator;
use ProductosSeeder;

class ProductosController extends Controller
{
    //-----------------MUESTRA TODOS LOS PRODUCTOS-----------------------------------------
    public function index()
    {
        //$productos=Productos::all();
        $productos = Productos::paginate(10);
        //$producto=Productos::select("productos.*")->get()->toArray();
        return view('productos/index', ['productos' => $productos]); //response(compact('productos'));
        /*
            'estado'=>'ok',
            'respuesta'=>$products
        ]);*/
    }
    //----------------CREA LA PLANTILLA PARA UN NUEVO REGISTRO------------------------------
    public function create()
    {
    }
    //---------------CREA LA PLANTILLA PARA ACTUALIZAR UN REGISTRO--------------------------
    public function edit(Productos $producto)
    {
    }
    //-------------------------GUARDAR UN NUEVO REGISTRO------------------------------------
    public function store(ValidarProducto $request)
    {
        try {
            $var = Productos::insert($request->all());
            return response()->json([
                'ok'    =>  true,
                'mensaje' =>  'Productos agregado correctamente'
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                'ok'    =>  false,
                'error' =>  $ex->getMessage()
            ]);
        }
    }
    //---------------------------MUESTRA UN PRODUCTO--------------------------------------
    public function show($id)
    {
        $producto = Productos::select("productos.*")->where("productos.id", $id)->first();
        return response()->json([
            "ok"    => true,
            "data"  =>  $producto,
            "id"    => $id
        ]);
    }
    //-------------------------ACTUALIZA DATOS DE UN PRODUCTO------------------------------
    public function update(ValidarProducto $request, $id)
    {
        $entrada = $request->all();
        try {
            $producto = Productos::find($id);
            if ($producto == false) {
                return response()->json([
                    'ok' => false,
                    'error' => "No se encontro el producto"
                ]);
            }
            $producto->update($entrada);
            return response()->json([
                'ok' => true,
                'mensaje' => 'Datos actualizados correctamente'
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                'ok' => false,
                'error' => $ex->getMessage()
            ]);
        }
    }
    //------------------------ELIMINA UN PRODUCTO DEL REGISTRO-----------------------------
    public function destroy($id)
    {
        try {
            $producto = Productos::find($id);
            if ($producto == false) {
                return response()->json([
                    'ok' => false,
                    'error' => 'No se encontro el Productos'
                ]);
            }
            $producto->delete();
            return back()->with('info', 'Eliminado correctamente');
        } catch (\Exception $ex) {
            return back()->with('info', 'Error inesperado al Eliminar (no se elimino)');
        }
    }
}
