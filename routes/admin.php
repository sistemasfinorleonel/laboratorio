<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PacienteController; 

Route::get('', [HomeController::class,'index'])->name('index');
Route::resource('pacientes', PacienteController::class)->names('pacientes');
