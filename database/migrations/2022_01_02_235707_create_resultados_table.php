<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orden_laboratorio_id')->constrained();
            $table->unsignedBigInteger('servicio_id')->constrained();
            $table->unsignedBigInteger('laboratorista_id')->constrained();
            $table->float('resultado');
            $table->string('descripcion');
            $table->foreign(['orden_laboratorio_id','servicio_id'])
                ->references(['orden_laboratorio_id','servicio_id'])
                ->on('detalle_servicios')
                ->onDelete('cascade');
            $table->foreign(['laboratorista_id'])
                ->references('id')
                ->on('laboratoristas')
                ->onDelete('cascade');

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
        Schema::dropIfExists('resultados');
    }
}
