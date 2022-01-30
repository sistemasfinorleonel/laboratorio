<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'departamentos';
    protected $primaryKey='id';

    protected $fillable =[
        'id', 'nombre','sigla'
    ];

    public function provincia()
    {
        return $this->belongsTo('App\Models\Provincia');
    }

    public function red(){
        return $this->belongsTo('App\Models\Red');
    }
}
