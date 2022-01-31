<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PacienteController;



Route::get('paciente', function(){
    return "Hola estoy haciendo rutas para paciente";
});