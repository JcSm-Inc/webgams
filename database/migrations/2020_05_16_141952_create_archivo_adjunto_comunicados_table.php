<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivoAdjuntoComunicadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivoadjuntocomunicado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('URL', 100);
			$table->string('EXTENCION', 10)->nullable();
			$table->unsignedBigInteger('idCOMUNICADO');
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
        Schema::dropIfExists('archivoadjuntocomunicado');
    }
}
