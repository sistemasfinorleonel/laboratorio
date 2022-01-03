<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PacienteController; 
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\LaboratoristaController;
use App\Http\Controllers\ExamenController;
use App\Models\Laboratorista;

Route::get('', [HomeController::class,'index'])->name('index');
Route::resource('pacientes', PacienteController::class)->names('pacientes');
Route::resource('medicos', MedicoController::class)->names('medicos');
Route::resource('laboratoristas', LaboratoristaController::class)->names('laboratoristas');
Route::resource('examens', ExamenController::class)->names('examens');