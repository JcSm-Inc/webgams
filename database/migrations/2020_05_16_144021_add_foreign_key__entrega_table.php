<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyEntregaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entrega', function (Blueprint $table) {
            $table->foreign('idPERSONAL_DE_PLANTA','entrega_idPERSONAL_DE_PLANTA_foerign' )
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
        Schema::table('entrega', function (Blueprint $table) {
            $table->dropForeign('entrega_idPERSONAL_DE_PLANTA_foerign');
        });
    }
}
