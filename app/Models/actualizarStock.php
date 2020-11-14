<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class actualizarStock extends Model
{
    public $table = "actualizar_stocks";
    protected $fillable = [
        'CANTIDAD',
        'FECHA',
        'idPRODUCTO',
        'idUSER',
        'NRO_DOCUMENTO',
        'PU',
        'PROVEEDOR'
    ];
    public $timestamsp = false;
}
