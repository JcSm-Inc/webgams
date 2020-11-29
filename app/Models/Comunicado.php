<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    public $table = "comunicado";
    protected $fillable = [
        'FECHA',
        'TITULO',
        'DESCRIPCION',
        'CONTENIDO',
        'slug',
        'CATEGORIA',
        'ESTADO',
        'ARCHIVO',
        'idPERSONAL_DE_PLANTA'
    ];
    public $timestamsp = false;
    public function personal_de_planta()
    {
        return $this->belongsTo('App\Models\Personal_de_Planta', 'idPERSONAL_DE_PLANTA', 'id');
    }
    public function scopeTitulo($query, $titulo)
    {
        return $query->where('TITULO', 'like', "%$titulo%");
    }
}
