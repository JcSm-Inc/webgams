<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('FECHA');
			$table->string('DESTINATARIO', 45)->nullable();
			$table->string('REFERENCIA', 45)->nullable();
			$table->unsignedBigInteger('idARCHIVOADJUNTO');
			$table->unsignedBigInteger('idUSUARIO');
		
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
        Schema::dropIfExists('nota');
    }
}
