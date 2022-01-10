<?php

namespace Database\Seeders;

use App\Models\DetalleServicio;
use Illuminate\Database\Seeder;

class DetalleServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetalleServicio::create(['orden_laboratorio_id'=>'1','servicio_id'=>'1','fecha_recepcion_muestra'=>'2000/01/07']);
      // DetalleServicio::create(['orden_laboratorio_id'=>'1','servicio_id'=>'1','examen_id'=>'2','fecha_recepcion_muestra'=>'2000/01/07']);
 //       DetalleServicio::create(['orden_laboratorio_id'=>'2','servicio_id'=>'1','examen_id'=>'3','fecha_recepcion_muestra'=>'05/04/2000']);
     /*    DetalleServicio::create(['orden_laboratorio_id'=>'2','servicio_id'=>'1','examen_id'=>'4','fecha_recepcion_muestra'=>'05/04/2000']);
        DetalleServicio::create(['orden_laboratorio_id'=>'1','servicio_id'=>'2','examen_id'=>'1','fecha_recepcion_muestra'=>'05/04/2000']);
        DetalleServicio::create(['orden_laboratorio_id'=>'1','servicio_id'=>'2','examen_id'=>'1','fecha_recepcion_muestra'=>'05/04/2000']);
     */
    }
}
