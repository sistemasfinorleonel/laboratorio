<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;
    public function detalle_servicio()
    {
        return $this->belongsTo('App\Models\DetalleServicio');
    } 
    public function resultado() {
        return $this->hasOne('App\Models\Resultado');
      }
}
