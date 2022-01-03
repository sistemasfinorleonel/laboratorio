<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenLaboratorio extends Model
{
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
}
