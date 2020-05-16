<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyDetalleReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detallereserva', function (Blueprint $table) {
            $table->foreign('idPRODUCTOS', 'detallereserva_idPRODUCTOS_foerign')
            ->references('id')->on('productos');
            $table->foreign('idRESERVA','detallereserva_idRESERVA_foerign' )
            ->references('id')->on('reserva')
            ->onUpdate('cascade')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detallereserva', function (Blueprint $table) {
            $table->dropForeign('detallereserva_idRESERVA_foerign');
            $table->dropForeign('detallereserva_idPRODUCTOS_foerign'); });
    }
}
