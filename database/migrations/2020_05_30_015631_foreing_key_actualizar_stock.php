<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeingKeyActualizarStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actualizar_stocks', function (Blueprint $table) {
            $table->foreign('idPRODUCTO', 'actualizar_stocks_idPRODUCTO_foerign')
                ->references('id')->on('productos');
            $table->foreign('idUSER', 'actualizar_stocks_idUSER_foerign')
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
        Schema::table('actualizar_stocks', function (Blueprint $table) {
            $table->dropForeign('actualizar_stocks_idPRODUCTO_foerign');
            $table->dropForeign('actualizar_stocks_idUSER_foerign');
        });
    }
}
