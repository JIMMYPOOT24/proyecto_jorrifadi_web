<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosempresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosempresa', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('mision');
            $table->string('vision');
            $table->string('caracteristicas');
            $table->string('url_logo');
            $table->string('url_curriculum');
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
        Schema::dropIfExists('datosempresa');
    }
}
