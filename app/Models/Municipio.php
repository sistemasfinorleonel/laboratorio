<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function provincia(){
        return $this->hasMany('App\Models\Provincia');
    }

    public function establecimiento(){
        return $this->belongsTo('App\Models\Establecimiento');
    }
}
