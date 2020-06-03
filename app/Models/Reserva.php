<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $table = "reserva";
    protected $fillable = [
        'FECHARESERVA',
        'idPERSONAL_DE_PLANTA',
        'ESTADO'
    ];
    public function DetalleReserva()
    {
        return $this->hasMany('App\Models\DetalleReserva', 'idRESERVA', 'id');
    }
}
