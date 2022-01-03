<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_laboratorios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->float('total')->nullable();
             $table->unsignedBigInteger('paciente_id')->constrained();
            $table->unsignedBigInteger('establecimiento_id')->constrained();
            $table->unsignedBigInteger('medico_id')->constrained();
            $table->foreign('paciente_id')->references('id')
                ->on('pacientes')
                ;
            $table->foreign('medico_id')->references('id')
                ->on('medicos')
                ;
            $table->foreign('establecimiento_id')->references('id')
                ->on('establecimientos')
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
        Schema::dropIfExists('orden_laboratorios');
    }
}
