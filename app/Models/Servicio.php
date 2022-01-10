<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    public function examenes()
    {
        return $this->hasMany('App\Models\Examen');
    }
    public function ordenes(){
        return $this->belongsToMany('App\Models\OrdenLaboratorio');
    }
    
}
