<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualizarStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualizar_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('CANTIDAD');
            $table->date('FECHA');
            $table->unsignedBigInteger('idPRODUCTO');
            $table->unsignedBigInteger('idUSER');
            $table->string('NRO_DOCUMENTO', 20);
            $table->double('PU');
            $table->string('PROVEEDOR', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actualizar_stocks');
    }
}
