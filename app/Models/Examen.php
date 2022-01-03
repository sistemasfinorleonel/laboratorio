<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    
  protected $guarded = ['id'];
    public function referencia()
    {
      return $this->belongsTo('App\Models\Referencia');
    }

    public function detalle_servicio() {
        return $this->hasOne('App\Models\DetalleServicio');
      }
    public function servicio()
    {
        return $this->belongsTo('App\Models\Servicio');
    } 
}
