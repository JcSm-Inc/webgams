<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyDetalleHojadeRutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detallehojaderuta', function (Blueprint $table) {
            $table->foreign('idARCHIVOADJUNTO', 'detallehojaderuta_idARCHIVOADJUNTO_foerign')
                ->references('id')->on('archivoadjunto');
            $table->foreign('idHOJADERUTA', 'detallehojaderuta_idHOJADERUTA_foerign')
                ->references('id')->on('hojaderuta')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idPERSONAL_DE_PLANTA', 'detallehojaderuta_idPERSONALDEPLANTA_foerign')
                ->references('id')->on('personal_de_planta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detallehojaderuta', function (Blueprint $table) {
            $table->dropForeign('detallehojaderuta_idARCHIVOADJUNTO_foerign');
            $table->dropForeign('detallehojaderuta_idHOJADERUTA_foerign');
            $table->dropForeign('detallehojaderuta_idPERSONALDEPLANTA_foerign');
        });
    }
}
