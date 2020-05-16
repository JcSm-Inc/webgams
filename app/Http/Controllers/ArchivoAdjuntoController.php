<?php

namespace App\Http\Controllers;

use App\Models\ArchivoAdjunto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArchivoAdjuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivoadjunto=ArchivoAdjunto::select("archivoadjunto.*")->get()->toArray();
        return $archivoadjunto;
    }

  
    public function create()
    {
        //
    }


      // GUARDAR  UN NUEVO PRODUCTO 

      public function store(Request $request)
      {
          $entrada=$request->all();
          $validator=Validator::make($entrada,[
              'NOMBRE' => 'required|unique:archivoadjunto|min:3|max:6',
              'DIRECCION' => 'required|max:100',
              'EXTENCION' => 'nullable|max:200'
              
              ] );
              if($validator->fails())
              {
                  return response()->json([
                      'ok' => false,
                      'error' => $validator->messages()
                  ]);
              }
              try{
                ArchivoAdjunto::create($entrada);
                  return response()->json([
                      'ok' => true,
                      'mensaje' => 'archivo adjunto agregado correctamente'
  
                  ]);
              }
              catch(\Exception $ex){
                  return response()->json([
                      'ok' => false,
                      'error' => $ex->getMessage()
  
                  ]);
              
          }
      }
  
      // MUESTRA UN PRODUCTO 
      public function show($id)
      {
          $archivoadjunto=ArchivoAdjunto::select("archivoadjunto.*")->where("archivoadjunto.id",$id)->first();
          return response()->json([
              "ok" => true,
              "data" => $archivoadjunto,
              "id" => $id
              
          ]);
      }
  
    // ACTUALIZA UN PRODUCTO 
      public function update(Request $request, $id)
      {
          $entrada=$request->all();
          $validator=Validator::make($entrada,[
            'NOMBRE' => 'required|unique:archivoadjunto|min:3|max:6',
            'DIRECCION' => 'required|max:100',
            'EXTENCION' => 'nullable|max:200'
              ] );
              if($validator->fails())
              {
                  return response()->json([
                      'ok' => false,
                      'error' => $validator->messages()
                  ]);
              }
              try{
                  $archivoadjunto=ArchivoAdjunto::find($id);
                  if($archivoadjunto==false){
                      return response()->json([
                          'ok' => false,
                          'error' => "No se encontro el Archivo" 
                      ]);
                  }
                  ArchivoAdjunto::update($entrada);
                  return response()->json(([
                      'ok' => true,
                      'mensaje' => "datos actualizados" 
                  ]));
              }
              catch(\Exception $ex){
                  return response()->json([
                      'ok' => false,
                      'error' => $ex->getMessage()
                      ]);
              }
      }
  
      // elimina un producto del registro
      public function destroy($id)
      {
          try {
              $archivoadjunto=ArchivoAdjunto::find($id);
              if($archivoadjunto==false){
                  return response()->json([
                      'ok' => false,
                      'error' => "no se encontro el ARCHIVO "
                  ]);
              
              }
              $archivoadjunto->delete($id);

              return response()->json([
                  'ok' => true,
                  'error' => "Eliminado correctamente"
              ]);
          }
          catch(\Exception $ex){
              return response()->json([
                  'ok' => false,
                  'error' => $ex->getMessage()
                  ]);
          }        
      }
  
  }