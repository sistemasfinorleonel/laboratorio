<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }
    public function orden_laboratorio()
    {
        return $this->hasMany('App\Models\OrdenLaboratorio');
    }
  }
