<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function municipio(){
        return $this->hasMany('App\Models\Municipio');
    }

    public function red(){
        return $this->hasMany('App\Models\Red');
    }
    public function orden_laboratorios(){
        return $this->hasMany('App\Models\OrdenLaboratorio');
    }
}
