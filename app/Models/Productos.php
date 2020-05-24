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
}
