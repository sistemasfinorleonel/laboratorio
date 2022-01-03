<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paciente::Create(['ci'=>'1958162 SCZ','nombre'=>'.PEDRO','paterno'=>'VEIZAGA','materno'=>'CABRERA','telefono'=>'71339531','fecha_nacimiento'=>'16/2/1946','edad'=>'75','sexo'=>'M','direccion'=>'B/  10 DE NOVIEMBRE','user_id'=>'1']);
Paciente::Create(['ci'=>'15440478 SCZ','nombre'=>'AARON','paterno'=>'ALBINO','materno'=>'ALBINO','telefono'=>'71339532','fecha_nacimiento'=>'15/4/2012','edad'=>'9','sexo'=>'M','direccion'=>'B/ 3 DE MAYO|¦','user_id'=>'1']);
Paciente::Create(['ci'=>'15878032 CHQ','nombre'=>'AARON GABRIEL','paterno'=>'AVILA','materno'=>'CITA','telefono'=>'71339533','fecha_nacimiento'=>'8/5/2019','edad'=>'2','sexo'=>'M','direccion'=>'CALLE 11|¦','user_id'=>'1']);
Paciente::Create(['ci'=>'14892216 SCZ','nombre'=>'AARON GAEL','paterno'=>'PARRA','materno'=>'VARGAS','telefono'=>'71339534','fecha_nacimiento'=>'21/6/2014','edad'=>'7','sexo'=>'M','direccion'=>'B/ FABRIL|¦','user_id'=>'1']);
Paciente::Create(['ci'=>'130412-ARA SCZ','nombre'=>'AARÓN RENE','paterno'=>'ROJAS','materno'=>'ALBINO','telefono'=>'71339535','fecha_nacimiento'=>'13/4/2012','edad'=>'9','sexo'=>'M','direccion'=>'B/VILLA VERDE','user_id'=>'1']);
Paciente::Create(['ci'=>'11314445 SCZ','nombre'=>'ABACUB DELFIN','paterno'=>'PINTO','materno'=>'SOTO','telefono'=>'71339536','fecha_nacimiento'=>'7/5/1997','edad'=>'24','sexo'=>'M','direccion'=>'CARCELETA|¦','user_id'=>'1']);
Paciente::Create(['ci'=>'4593401 SCZ','nombre'=>'ABAD','paterno'=>'VEIZAGA','materno'=>'GONSALES','telefono'=>'71339537','fecha_nacimiento'=>'10/2/2012','edad'=>'9','sexo'=>'M','direccion'=>'B/VILLA CBBA','user_id'=>'1']);
Paciente::Create(['ci'=>'2987377 SCZ','nombre'=>'ABAD RICHAR','paterno'=>'MONTERO','materno'=>'GUZMAN','telefono'=>'71339538','fecha_nacimiento'=>'20/12/1963','edad'=>'58','sexo'=>'M','direccion'=>'B/ FERRIA EL CARMEN','user_id'=>'1']);
Paciente::Create(['ci'=>'16166825 SCZ','nombre'=>'ABDEL','paterno'=>'VACA','materno'=>'OLGUIN','telefono'=>'71339539','fecha_nacimiento'=>'13/8/2002','edad'=>'19','sexo'=>'M','direccion'=>'CALLE 18|¦','user_id'=>'1']);
Paciente::Create(['ci'=>'3897611 SCZ','nombre'=>'ABDIAZ','paterno'=>'ANDIA','materno'=>'SAAVEDRA','telefono'=>'71339540','fecha_nacimiento'=>'16/2/1970','edad'=>'51','sexo'=>'M','direccion'=>'B/ MUNICIPAL','user_id'=>'1']);
Paciente::Create(['ci'=>'16339239 SCZ','nombre'=>'LIDIA','paterno'=>'MIRANDA','materno'=>'GUARISTI','telefono'=>'71339541','fecha_nacimiento'=>'21/5/2019','edad'=>'2','sexo'=>'F','direccion'=>'VILLA VIRGINIA|¦','user_id'=>'1']);
    }
}
