<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nota', function (Blueprint $table) {
            $table->foreign('idARCHIVOADJUNTO', 'nota_idARCHIVOADJUNTO_foerign')
                ->references('id')->on('archivoadjunto');
            $table->foreign('idUSUARIO', 'nota_idUSUARIO_foerign')
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
        Schema::table('nota', function (Blueprint $table) {
            $table->dropForeign('nota_idUSUARIO_foerign');
            $table->dropForeign('nota_idARCHIVOADJUNTO_foerign');
        });
    }
}
