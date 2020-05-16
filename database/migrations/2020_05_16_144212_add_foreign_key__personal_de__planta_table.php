<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPersonalDePlantaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_de_planta', function (Blueprint $table) {
            $table->foreign('idUSUARIO','personal_de_planta_idUSUARIO_foerign')
            ->references('id')->on('users');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_de_planta', function (Blueprint $table) {
            $table->dropForeign('personal_de_planta_idUSUARIO_foerign');});
    }
}
