<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivoAdjuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivoadjunto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NOMBRE', 45);
			$table->string('DIRECCION', 100);
			$table->string('EXTENCION', 10)->nullable();
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
        Schema::dropIfExists('archivoadjunto');
    }
}
