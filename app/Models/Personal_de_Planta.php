<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal_de_Planta extends Model
{
    public $table = "personal_de_planta";
    protected $fillable = [
        'CARGO',
        'idUSUARIO'
    ];
    public $timestamsp = false;
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'idUSUARIO', 'id');
    }
    public function comuncicado()
    {
        return $this->hasMany('App\Models\Comunicado', 'idPERSONAL_DE_PLANTA', 'id');
    }
    public function reserva()
    {
        return $this->hasOne('App\Models\Reserva', 'idPERSONAL_DE_PLANTA', 'id');
    }
    public function entrega()
    {
        return $this->hasMany('App\Models\Personal_de_Planta', 'idPERSONAL_DE_PLANTA', 'id');
    }
}
