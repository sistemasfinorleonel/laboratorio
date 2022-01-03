<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('red_id');
            $table->string('nombre');
            $table->string('esta_area');
            $table->string('nivel');
            $table->string('tipo');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
            $table->foreign('red_id')->references('id')->on('reds')->onDelete('cascade');
          
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
        Schema::dropIfExists('establecimientos');
    }
}
