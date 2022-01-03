<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{

  protected $guarded = ['id'];
    use HasFactory;
    public function examen() {
        return $this->hasOne('App\Models\Examen');
      }

}
