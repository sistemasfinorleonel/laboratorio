<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class DetalleExamen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function examen()
    {
        return $this->belongsTo('App\Models\Examen');
    } 

}
