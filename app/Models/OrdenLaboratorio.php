<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenLaboratorio extends Model
{protected $guarded = ['id'];
    use HasFactory;
    public function establecimiento()
    {
        return $this->belongsTo('App\Models\Establecimiento');
    }
    public function medico()
    {
        return $this->belongsTo('App\Models\Medico');
    } 
    public function paciente()
    {
        return $this->belongsTo('App\Models\Paciente');
    }  
    public function servicios(){
    return $this->belongsToMany('App\Models\Servicio');
    }
}