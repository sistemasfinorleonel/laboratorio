<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $guarded = ['id'];



    public function provincia()
    {
        return $this->belongsTo('App\Models\Provincia');
    }

    public function red(){
        return $this->belongsTo('App\Models\Red');
    }
}
