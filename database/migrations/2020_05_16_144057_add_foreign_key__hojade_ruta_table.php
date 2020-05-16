<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyHojadeRutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hojaderuta', function (Blueprint $table) {
            $table->foreign('idNOTA','hojaderuta_idNOTA_foerign')
            ->references('id')->on('nota');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hojaderuta', function (Blueprint $table) {
            $table->dropForeign('hojaderuta_idNOTA_foerign');
        });
    }
}
