<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrdenLaboratorio;

class OrdenLaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            OrdenLaboratorio::Create(['fecha'=>'12/20/2021','total'=>'22','paciente_id'=>'1','establecimiento_id'=>'2752','medico_id'=>'1']);
            OrdenLaboratorio::Create(['fecha'=>'12/21/2021','total'=>'20','paciente_id'=>'1','establecimiento_id'=>'2753','medico_id'=>'1']);
            OrdenLaboratorio::Create(['fecha'=>'12/22/2021','total'=>'22','paciente_id'=>'1','establecimiento_id'=>'2754','medico_id'=>'1']);
            OrdenLaboratorio::Create(['fecha'=>'12/23/2021','total'=>'20','paciente_id'=>'1','establecimiento_id'=>'2755','medico_id'=>'1']);
            OrdenLaboratorio::Create(['fecha'=>'12/24/2021','total'=>'22','paciente_id'=>'2','establecimiento_id'=>'2756','medico_id'=>'1']);
            OrdenLaboratorio::Create(['fecha'=>'12/25/2021','total'=>'20','paciente_id'=>'2','establecimiento_id'=>'2757','medico_id'=>'1']);
            OrdenLaboratorio::Create(['fecha'=>'12/26/2021','total'=>'20','paciente_id'=>'2','establecimiento_id'=>'2752','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'12/27/2021','total'=>'20','paciente_id'=>'2','establecimiento_id'=>'2753','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'12/28/2021','total'=>'20','paciente_id'=>'2','establecimiento_id'=>'2754','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'12/29/2021','total'=>'20','paciente_id'=>'2','establecimiento_id'=>'2755','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'12/30/2021','total'=>'20','paciente_id'=>'3','establecimiento_id'=>'2756','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'12/31/2021','total'=>'20','paciente_id'=>'3','establecimiento_id'=>'2757','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'1/1/2022','total'=>'20','paciente_id'=>'3','establecimiento_id'=>'2752','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'1/2/2022','total'=>'20','paciente_id'=>'3','establecimiento_id'=>'2753','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'1/3/2022','total'=>'20','paciente_id'=>'3','establecimiento_id'=>'2754','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'1/3/2022','total'=>'20','paciente_id'=>'3','establecimiento_id'=>'2755','medico_id'=>'2']);
            OrdenLaboratorio::Create(['fecha'=>'1/3/2022','total'=>'20','paciente_id'=>'3','establecimiento_id'=>'2756','medico_id'=>'3']);
            OrdenLaboratorio::Create(['fecha'=>'1/3/2022','total'=>'20','paciente_id'=>'4','establecimiento_id'=>'2757','medico_id'=>'3']);
            OrdenLaboratorio::Create(['fecha'=>'1/3/2022','total'=>'20','paciente_id'=>'4','establecimiento_id'=>'2757','medico_id'=>'3']);

    }
}
