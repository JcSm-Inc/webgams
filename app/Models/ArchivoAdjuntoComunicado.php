<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivoAdjuntoComunicado extends Model
{
    public $table = "archivoadjuntocomunicado";
    protected $fillable = [
        'URL',
        'EXTENCION',
        'idCOMUNICADO'

    ];
    public $timestamsp = false;
}
