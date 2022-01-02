<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencias', function (Blueprint $table) {
            $table->id();
            $table->integer('edad_ini');
            $table->integer('edad_fin');
            $table->enum('sexo',['Masculino','Femenino']);
            $table->float('unidad_medida');
            $table->float('rango_ini');
            $table->float('rango_fin');
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
        Schema::dropIfExists('referencias');
    }
}
