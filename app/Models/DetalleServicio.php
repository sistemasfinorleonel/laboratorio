<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleServicio extends Model
{protected $guarded = ['id'];
    use HasFactory;
    
    public function scopeDetalleexamen($query,$ser_id)
    {
       return $query->where('servicio_id',$ser_id);//->where(1,'servicio_id');//where(1,'servicio_id')->get();
    }
}
