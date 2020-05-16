<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reserva', function (Blueprint $table) {
            $table->foreign('idPERSONAL_DE_PLANTA',)
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
        Schema::table('reserva', function (Blueprint $table) {
            $table->dropForeign('reserva_idPERSONAL_DE_PLANTA_foerign');
        });
    }
}
