<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CODPROD', 10);
            $table->string('NOMBRE', 100);
            $table->string('DESCRIPCION', 200)->nullable();
            $table->string('TIPO', 45);
            $table->string('FOTO', 100)->nullable();
            $table->integer('STOCK')->nullable()->default(0);
            $table->string('UNIDAD', 20)->nullable();
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
        Schema::dropIfExists('productos');
    }
}
