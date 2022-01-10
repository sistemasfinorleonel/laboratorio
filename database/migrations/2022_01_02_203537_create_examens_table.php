<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('referencia_id');
            $table->unsignedBigInteger('servicio_id');
            $table->foreign('referencia_id')
            ->references('id')
            ->on('referencias')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
            $table->foreign('servicio_id')
            ->references('id')
            ->on('servicios')
            ->onDelete('cascade')
            ->onUpdate('cascade')
           ;
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
        Schema::dropIfExists('examens');
    }
}
