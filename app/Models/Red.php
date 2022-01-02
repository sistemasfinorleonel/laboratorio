<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function departamento(){
        return $this->hasMany('App\Models\Departamento');
    }
    public function establecimiento(){
        return $this->belongsTo('App\Models\Establecimiento');
    }
}
