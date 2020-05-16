<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('FECHAENTREGA');
			$table->boolean('ESTADO');
			$table->unsignedBigInteger('idPERSONAL_DE_PLANTA');
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
        Schema::dropIfExists('entrega');
    }
}
