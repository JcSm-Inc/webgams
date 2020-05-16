<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyArchivoAdjuntoComunicadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archivoadjuntocomunicado', function (Blueprint $table) {
            $table->foreign('idCOMUNICADO','archivoadjuntocomunicado_idCOMUNICADO_foerign')
			->references('id')->on('comunicado');
		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archivoadjuntocomunicado', function (Blueprint $table) {
            $table->dropForeign('archivoadjuntocomunicado_idCOMUNICADO_foerign');
        });
    }
}
