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

    public function detalle_examen() {
        return $this->hasOne('App\Models\DetalleExamen');
      }
    public function servicio()
    {
        return $this->belongsTo('App\Models\Servicio');
    } 

    public function scopeDetalle($query,$ser_id)
    {
       return $query->where('servicio_id',$ser_id);//->where(1,'servicio_id');//where(1,'servicio_id')->get();
    }
    

  }
