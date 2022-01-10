<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_examens', function (Blueprint $table) {
        
            $table->unsignedBigInteger('or_lab_id')->constrained();
            $table->unsignedBigInteger('ser_id')->constrained();
            $table->unsignedBigInteger('exa_id')->constrained();
            $table->primary(['or_lab_id','ser_id','exa_id']);
            $table->foreign(['or_lab_id','ser_id'])
            ->references(['orden_laboratorio_id','servicio_id'])
                 ->on('detalle_servicios')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');
             $table->foreign('exa_id')->references('id')
                 ->on('examens')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');
         
 
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
        Schema::dropIfExists('detalle_examens');
    }
}
