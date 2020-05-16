<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivoAdjunto extends Model
{
    public $table="archivoadjunto";
    protected $fillable=[
        'NOMBRE',
        'DIRECCION',
        'EXTENCION'
       
    ];
    public $timestamsp=false;
}
