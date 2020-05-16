<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $table="productos";
    protected $fillable=[
        'CODPROD',
        'NOMBRE',
        'DESCRIPCION',
        'TIPO',
        'FOTO',
        'STOCK'
    ];
    public $timestamps=false;
}
