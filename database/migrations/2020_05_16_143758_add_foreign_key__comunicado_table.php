<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyComunicadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comunicado', function (Blueprint $table) {
            $table->foreign('idPERSONAL_DE_PLANTA','comunicado_idPERSONAL_DE_PLANTA_foerign')
            ->references('id')
            ->on('personal_de_planta')->onUpdate('cascade')->onDelete('cascade');
		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comunicado', function (Blueprint $table) {
            $table->dropForeign('comunicado_idPERSONAL_DE_PLANTA_foerign');
        
        });
    }
}
