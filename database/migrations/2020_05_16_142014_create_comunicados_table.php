<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunicadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunicado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('FECHA');
            $table->string('TITULO', 128);
            $table->mediumText('DESCRIPCION')->nullable();
            $table->text('CONTENIDO')->nullable();
            $table->string('slug', 128)->unique();
            $table->string('CATEGORIA', 20);
            $table->enum('ESTADO', ['PUBLICADO', 'BORRADOR'])->default('BORRADOR');
            $table->string('ARCHIVO', 128)->nullable();
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
        Schema::dropIfExists('comunicado');
    }
}
