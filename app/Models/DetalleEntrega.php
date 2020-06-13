<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleEntrega extends Model
{
    public $table = "detalleentrega";
    protected $fillable = [
        'CANTIDAD',
        'idENTREGA',
        'idPRODUCTOS'
    ];
    public function entrega()
    {
        return $this->belongsTo('App\Models\Entrega', 'idENTREGA', 'id');
    }
    public function productos()
    {
        return $this->belongsTo('App\Models\Productos', 'idPRODUCTOS', 'id');
    }
}
