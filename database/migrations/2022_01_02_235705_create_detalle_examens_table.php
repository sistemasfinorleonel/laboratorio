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
           $table->id();
           $table->unsignedBigInteger('laboratorista_id')->nullable(); 
            $table->unsignedBigInteger('oservicio_id')->nullable();
            $table->unsignedBigInteger('exa_id')->nullable();
            $table->float('resultado')->nullable();
            $table->string('descripcion')->nullable();
            $table->foreign('oservicio_id')
            ->references('id')
                 ->on('detalle_servicios')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');
             $table->foreign('exa_id')->references('id')
                 ->on('examens')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');
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
        Schema::dropIfExists('detalle_examens');
    }
}
