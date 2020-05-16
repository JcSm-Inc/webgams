<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojadeRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojaderuta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('FECHA');
			$table->string('REFERENCIA', 45);
			$table->integer('NROHOJAS');
			$table->string('DESTINATARIO', 45);
			$table->unsignedBigInteger('idNOTA');
		
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
        Schema::dropIfExists('hojaderuta');
    }
}
