<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\DetalleExamenController;
use App\Http\Controllers\DetalleresultadoexamenController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PacienteController; 
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\LaboratoristaController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\OrdenLaboratorioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\ResultadoController;
use App\Models\Laboratorista;
use App\Models\OrdenLaboratorio;

Route::get('', [HomeController::class,'index'])->name('index');
Route::resource('pacientes', PacienteController::class)->names('pacientes');
Route::resource('medicos', MedicoController::class)->names('medicos');
Route::resource('laboratoristas', LaboratoristaController::class)->names('laboratoristas');
Route::resource('examens', ExamenController::class)->names('examens');

Route::resource('establecimientos', EstablecimientoController::class)->names('establecimientos');
Route::resource('servicios', ServicioController::class)->names('servicios');
Route::resource('ordens', OrdenLaboratorioController::class)->names('ordens');
Route::resource('orden-servicios', ResultadoController::class)->names('ordenservicios');
Route::get('mostrardetalles/{{$detalle}}',[DetalleresultadoexamenController::class,'mostrar'])->name('mostrardetalles');

//Route::get('ordens',[ OrdenLaboratorioController::class,'index'])->name('ordens');

//Route::get('establecimientos',[ EstablecimientoController::class,'index'])->name('establecimientos');