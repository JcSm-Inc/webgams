<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyDetalleEntregaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalleentrega', function (Blueprint $table) {
            $table->foreign('idENTREGA','detalleentrega_idENTREGA_foerign')
            ->references('id')->on('entrega')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('idPRODUCTOS','detalleentrega_idPRODUCTOS_foerign')
            ->references('id')->on('productos');
		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalleentrega', function (Blueprint $table) {
            $table->dropForeign('detalleentrega_idENTREGA_foerign');
            $table->dropForeign('detalleentrega_idPRODUCTOS_foerign');
        
        });
    }
}
