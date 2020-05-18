<?php

namespace App\Http\Controllers;

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
        $products=Productos::paginate();
        //$producto=Productos::select("productos.*")->get()->toArray();
        return response(compact('products'));/*
            'estado'=>'ok',
            'respuesta'=>$products
        ]);*/
    }
    //----------------CREA LA PLANTILLA PARA UN NUEVO REGISTRO------------------------------
    public function create()
    {
        
    }
    //---------------CREA LA PLANTILLA PARA ACTUALIZAR UN REGISTRO--------------------------
    public function edit()
    {

    }
    //-------------------------GUARDAR UN NUEVO REGISTRO------------------------------------
    public function store(Request $request)
    {
        $entrada=$request->all();
        $validator=Validator::make($entrada,[
            'CODPROD'    => 'required|unique:productos|min:3|max:6',
            'NOMBRE'    => 'required|max:100',
            'DESCRIPCION'=>'nullable|max:200',
            'TIPO'      => 'max:45',
            'FOTO'      => 'max:100',
            'STOCK'     => 'numeric'
        ]);
        if($validator->fails())
        {
            return response()->json([
                'ok'    =>  false,
                'error' =>  $validator->messages()
            ]);
        }
        try{
            Productos::create($entrada);
            return response()->json([
                'ok'    =>  true,
                'mensaje' =>  'Productos agregado correctamente'
            ]);
        }
        catch(\Exception $ex){
            return response()->json([
                'ok'    =>  false,
                'error' =>  $ex->getMessage()
            ]); 
        }
    }
    //---------------------------MUESTRA UN PRODUCTO--------------------------------------
    public function show($id)
    {
        $producto=Productos::select("productos.*")->where("productos.id",$id)->first();
        return response()->json([
            "ok"    => true,
            "data"  =>  $producto,
            "id"    => $id
        ]);
    }
    //-------------------------ACTUALIZA DATOS DE UN PRODUCTO------------------------------
    public function update(Request $request, $id)
    {
        $entrada=$request->all();
        $validator=Validator::make($entrada,[
            'CODPROD'    => 'required|min:3|max:6',
            'NOMBRE'    => 'required|max:100',
            'DESCRIPCION'=>'nullable|max:200',
            'TIPO'      => 'max:45',
            'FOTO'      => 'max:100',
            'STOCK'     => 'numeric'
        ]);
        if($validator->fails())
        {
            return response()->json([
                'ok'    =>  false,
                'error' =>  $validator->messages()
            ]);
        }
        try{
            $producto=Productos::find($id);
            if($producto==false){
                return response()->json([
                    'ok' => false,
                    'error' => "No se encontro el producto"
                ]);
            }
            $producto->update($entrada);
            return response()->json([
                'ok'=>true,
                'mensaje'=>'Datos actualizados correctamente'
            ]);
        }
        catch(\Exception $ex){
            return response()->json([
                'ok'=>false,
                'error'=>$ex->getMessage()
            ]);
        }
    }
    //------------------------ELIMINA UN PRODUCTO DEL REGISTRO-----------------------------
    public function destroy($id)
    {
        try{
            $producto=Productos::find($id);
            if($producto==false){
                return response()->json([
                    'ok'=>false,
                    'error'=>'No se encontro el Productos'
                ]);
            }
            $producto->delete();
            return response()->json([
                'ok'=>true,
                'mensaje'=>"Eliminado correctamente"
            ]);
        }catch(\Exception $ex){
            return response()->json([
                'ok'    =>  false,
                'error' =>  $ex->getMessage()
            ]);
        }
    }
}