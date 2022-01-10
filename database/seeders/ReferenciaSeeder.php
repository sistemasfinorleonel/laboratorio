<?php

namespace Database\Seeders;

use App\Models\Referencia;
use Illuminate\Database\Seeder;

class ReferenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Referencia::Create(['edad_ini'=>'8','edad_fin'=>'15','sexo'=>'Masculino','unidad_medida'=>'gl','rango_ini'=>'157','rango_fin'=>'289']);           
        Referencia::Create(['edad_ini'=>'18','edad_fin'=>'25','sexo'=>'Masculino','unidad_medida'=>'gml','rango_ini'=>'1057','rango_fin'=>'2089']);            
        Referencia::Create(['edad_ini'=>'25','edad_fin'=>'40','sexo'=>'Masculino','unidad_medida'=>'gkl','rango_ini'=>'1257','rango_fin'=>'2189']);            
        Referencia::Create(['edad_ini'=>'30','edad_fin'=>'60','sexo'=>'Masculino','unidad_medida'=>'gjl','rango_ini'=>'1057','rango_fin'=>'1789']);            
        Referencia::Create(['edad_ini'=>'8','edad_fin'=>'10','sexo'=>'Masculino','unidad_medida'=>'gl','rango_ini'=>'157','rango_fin'=>'289']);            
        Referencia::Create(['edad_ini'=>'8','edad_fin'=>'10','sexo'=>'Masculino','unidad_medida'=>'gl','rango_ini'=>'157','rango_fin'=>'289']);            
        Referencia::Create(['edad_ini'=>'8','edad_fin'=>'10','sexo'=>'Masculino','unidad_medida'=>'gl','rango_ini'=>'157','rango_fin'=>'289']);          
        Referencia::Create(['edad_ini'=>'8','edad_fin'=>'10','sexo'=>'Masculino','unidad_medida'=>'gl','rango_ini'=>'157','rango_fin'=>'289']);            

    }
}
