<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleReserva extends Model
{
    public $table = "detallereserva";
    protected $fillable = [
        'CANTIDAD',
        'idRESERVA',
        'idPRODUCTOS'
    ];
    public function reserva()
    {
        return $this->belongsTo('App\Models\Reserva', 'idRESERVA', 'id');
    }
    public function productos()
    {
        return $this->belongsTo('App\Models\Producto', 'idPRODUCTOS', 'id');
    }
}
