<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_servicios', function (Blueprint $table) {
        
             
            $table->unsignedBigInteger('orden_laboratorio_id')->constrained();
            $table->unsignedBigInteger('servicio_id')->constrained();
         //   $table->unsignedBigInteger('examen_id')->constrained();
           $table->primary(['orden_laboratorio_id','servicio_id']);
           $table->string('fecha_recepcion_muestra')->nullable();
           $table->foreign('orden_laboratorio_id')->references('id')
                ->on('orden_laboratorios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('servicio_id')->references('id')
                ->on('servicios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
         /*    $table->foreign('examen_id')->references('id')
                ->on('examens')
                ->onDelete('cascade')
                ->onUpdate('cascade');
          */   
            
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
        Schema::dropIfExists('detalle_servicios');
    }
}
