<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use Illuiminate\app\models\Departamento; 

class Provincia extends Model
{
    use HasFactory;
    protected $table = 'provincias';
    protected $primaryKey='id';

    protected $fillable =[
        'id','nombre','departamento_id'
    ];
    public function departamento()
    {
        return $this->hasMany('App\Models\Departamento');
    }

    public function municipio(){
        return $this->belongsTo('App\Models\Municipio');
    }
}
