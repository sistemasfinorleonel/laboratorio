<?php

namespace Database\Seeders;

use App\Models\Examen;
use Illuminate\Database\Seeder;

class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Examen::Create(['nombre'=>'hemoglobina especifica','referencia_id'=>'1','servicio_id'=>'1']);
        Examen::Create(['nombre'=>'hemoglobina compuesta','referencia_id'=>'2','servicio_id'=>'1']);    
        Examen::Create(['nombre'=>'prueba de tuberculoses','referencia_id'=>'3','servicio_id'=>'2']);    
        Examen::Create(['nombre'=>'leucositos','referencia_id'=>'4','servicio_id'=>'2']);    
        
    }
}
