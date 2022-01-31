<?php

use App\Models\Departamento;
use App\Models\DetalleExamen;
use App\Models\DetalleServicio;
use App\Models\Establecimiento;
use App\Models\Examen;
use App\Models\Laboratorista;
use App\Models\Medico;
use App\Models\Municipio;
use App\Models\OrdenLaboratorio;
use App\Models\Paciente;
use App\Models\Provincia;
use App\Models\Red;
use App\Models\Referencia;
use App\Models\Resultado;
use App\Models\Servicio;
use App\Models\User;

function user($id)
{
    return User::findorFail($id);
}
function departamento($id){
    return Departamento::findOrFail($id);
}
function provincia($id){
    return Provincia::findOrFail($id);
}
function municipio($id){
    return Municipio::findOrFail($id);
}
function establecimiento($id){
    return Establecimiento::findOrFail($id);
}
function red($id){
    return Red::findOrFail($id);
}
function orden_laboratorio($id){
    return OrdenLaboratorio::findOrFail($id);
}
function paciente($id){
    return Paciente::findOrFail($id);
}

function medico($id){
    return Medico::findOrFail($id);
}

function servicio($id){
    return Servicio::findOrFail($id);
}


function detalle_servicio($id){
    return DetalleServicio::findOrFail($id);
}
function examen($id){
    return Examen::findOrFail($id);
}
function detalle_examen($id){
    return DetalleExamen::findOrFail($id);
}

function resultado($id){
    return Resultado::findOrFail($id);
}
function laboratorista($id){
    return Laboratorista::findOrFail($id);
}

function referencia($id){
    return Referencia::findOrFail($id);
}

///////
function departamentos(){
    return Departamento::all();
}
function provincias($id){   
    return Provincia::all();
}
function provicias_idDpt($id){   
    return Provincia::where('departamento_id','=',$id)->get();
}

function establecimiento_idProv($id){
    return Establecimiento::where('establecimiento_id','=',$id)->get();
}


function orden_laboratorios()
{
    return OrdenLaboratorio::all(); 
}

?>