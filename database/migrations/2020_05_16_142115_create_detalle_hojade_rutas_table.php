<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleHojadeRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallehojaderuta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('FECHA');
			$table->integer('NROHOJAS');
			$table->string('DESTINATARIO', 100);
			$table->string('SUATENCION', 100);
			$table->string('INSTRUCCIONADICIONAL', 200);
			$table->boolean('URGENTE');
			$table->boolean('PREPARARRESPUESTA')->nullable()->default(0);
			$table->boolean('PROCESAR')->nullable()->default(0);
			$table->boolean('ARCHIVO')->nullable()->default(0);
			$table->unsignedBigInteger('idHOJADERUTA');
			$table->unsignedBigInteger('idPERSONAL_DE_PLANTA');
			$table->unsignedBigInteger('idARCHIVOADJUNTO');
		
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
        Schema::dropIfExists('detallehojaderuta');
    }
}
