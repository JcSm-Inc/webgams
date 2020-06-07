<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $table = "productos";
    protected $fillable = [
        'CODPROD',
        'NOMBRE',
        'DESCRIPCION',
        'TIPO',
        'FOTO',
        'STOCK'
    ];
    public function scopeNombres($query, $nombre)
    {
        return $query->where('NOMBRE', 'like', "%$nombre%");
    }
    public function scopeCodProd($query, $codprod)
    {
        return $query->where('CODPROD', 'like', "%$codprod%");
    }
    public function scopeDescripcion($query, $nombre)
    {
        return $query->where('DESCRIPCION', 'like', "%$nombre");
    }
    //funcion para enlazar a detalle reserva
    public function DetalleReserva()
    {
        return $this->hasMany('App\Models\DetalleReserva', 'idPRODUCTOS', 'id');
    }
    public static function productoDisponible($id)
    {
        $disponible = Productos::find($id)->STOCK;
        $reservado = Reserva::join('detallereserva', 'reserva.id', '=', 'detallereserva.idRESERVA')
            ->where('reserva.ESTADO', '=', 'ACTIVO')
            ->where('detallereserva.idPRODUCTOS', '=', $id)
            ->sum('detallereserva.cantidad');
        return $disponible - $reservado;
    }
    public static function productosDisponibles()
    {
        $productos = Productos::all()->where('STOCK', '>', 0);
        $i = 0;
        $disponibles = [];
        foreach ($productos as $producto) {
            $producto->STOCK = Productos::productoDisponible($producto->id);
            if ($producto->STOCK > 0) {
                array_push($disponibles, $producto);
            }
            $i++;
            //$producto->delete();
        }
        //$productos
        return $disponibles;
    }
}
