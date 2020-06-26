<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    public $table = "entrega";
    protected $fillable = [
        'FECHAENTREGA',
        'idPERSONAL_DE_PLANTA',
        'ESTADO'
    ];
    public function detalleentrega()
    {
        return $this->hasMany('App\Models\DetalleEntrega', 'idENTREGA', 'id');
    }
    public function personal_de_planta()
    {
        return $this->belongsTo('App\Models\Personal_de_Planta', 'idPERSONAL_DE_PLANTA', 'id');
    }
}
