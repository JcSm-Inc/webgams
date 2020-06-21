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
    public function DetalleEntrega()
    {
        return $this->hasMany('App\Models\DetalleEntrega', 'idPRODUCTOS', 'id');
    }
    public static function productoDisponible($id)
    {
        $disponible = Productos::find($id)->STOCK;
        $reservado = Reserva::join('detallereserva', 'reserva.id', '=', 'detallereserva.idRESERVA')
            ->where('reserva.ESTADO', '=', 'ACTIVO')
            ->where('detallereserva.idPRODUCTOS', '=', $id)
            ->sum('detallereserva.cantidad');
        $disp = $disponible - $reservado;
        if ($disp > 0)
            return $disp;
        else return 0;
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
        }
        return $disponibles;
    }
    public static function productosMasConsumidos($limite)
    {
        $productos = DetalleEntrega::select('idPRODUCTOS', DetalleEntrega::raw('SUM(CANTIDAD) as CANTIDAD'))->groupBy('idPRODUCTOS')->orderBy('CANTIDAD', 'desc')->limit($limite)->get();
        $consumidos = [];
        foreach ($productos as $producto) {
            $item = Productos::find($producto->idPRODUCTOS);
            $item->STOCK = Productos::productoDisponible($item->id);
            if ($item->STOCK > 0)
                array_push($consumidos, $item);
        }
        return $consumidos;
    }
    public static function productosCategorias($categoria)
    {
        $productos = Productos::all()->where('TIPO', '=', $categoria);
        $categorias = [];
        foreach ($productos as $producto) {
            $producto->STOCK = Productos::productoDisponible($producto->id);
            if ($producto->STOCK > 0)
                array_push($categorias, $producto);
        }
        return $categorias;
    }
    public static function buscar($valor, $limite)
    {
        $productos = Productos::where('NOMBRE', 'like', "%" . $valor . "%")->limit($limite)->get();
        if (sizeof($productos) <= 0) {
            $productos = Productos::where('DESCRIPCION', 'like', "%" . $valor . "%")
                ->limit($limite)->get();
        }
        $disponibles = [];
        foreach ($productos as $producto) {
            $producto->STOCK = Productos::productoDisponible($producto->id);
            if ($producto->STOCK > 0)
                array_push($disponibles, $producto);
        }
        return $disponibles;
    }
}
