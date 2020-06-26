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
    public function detallereserva()
    {
        return $this->hasMany('App\Models\DetalleReserva', 'idRESERVA', 'id');
    }
    public function personal_de_planta()
    {
        return $this->belongsTo('App\Models\Personal_de_Planta', 'idPERSONAL_DE_PLANTA', 'id');
    }
}
