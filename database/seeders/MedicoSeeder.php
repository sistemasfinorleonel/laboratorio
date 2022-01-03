<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medico;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medico::Create(['ci'=>'97291170 SCZ','nombre'=>'ABIGAIL','paterno'=>'DURAN','materno'=>'ESPINOZA','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/1','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'20']);
Medico::Create(['ci'=>'6308705 SCZ','nombre'=>'ADRIN','paterno'=>'VIERA','materno'=>'LOPZA','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/2','sexo'=>'Masculino','direccion'=>'calla angel gutierrez','user_id'=>'21']);
Medico::Create(['ci'=>'4699199 SCZ','nombre'=>'ALEX JOSEPH','paterno'=>'HERRERA','materno'=>'RIVEZA','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/3','sexo'=>'Masculino','direccion'=>'Calle la amargura','user_id'=>'22']);
Medico::Create(['ci'=>'6354242 SCZ','nombre'=>'ANA CRISTINA','paterno'=>'VELIZ','materno'=>'ESCALEZA','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/4','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'23']);
Medico::Create(['ci'=>'97291170 SCZ','nombre'=>'ANA MARIA','paterno'=>'VASQUEZ','materno'=>'FERNA','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/5','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'24']);
Medico::Create(['ci'=>'6308705 SCZ','nombre'=>'ANGEL','paterno'=>'PINTO','materno'=>'VEZA','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/6','sexo'=>'Masculino','direccion'=>'calla angel gutierrez','user_id'=>'25']);
Medico::Create(['ci'=>'4699199 SCZ','nombre'=>'ANGELA','paterno'=>'RODRIGUEZ','materno'=>'SURA','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/7','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'26']);
Medico::Create(['ci'=>'6354242 SCZ','nombre'=>'BAT SEBA','paterno'=>'CALLA','materno'=>'CUEVASOB','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/8','sexo'=>'Masculino','direccion'=>'calla angel gutierrez','user_id'=>'27']);
Medico::Create(['ci'=>'97291170 SCZ','nombre'=>'BRENDA ANAHI','paterno'=>'ROJAS','materno'=>'GOMZB','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/9','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'28']);
Medico::Create(['ci'=>'6308705 SCZ','nombre'=>'CARLA PATRICIA','paterno'=>'ARANA','materno'=>'','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/10','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'29']);
Medico::Create(['ci'=>'4699199 SCZ','nombre'=>'CARLOS ALFREDO','paterno'=>'ORTIZ','materno'=>'VILAROZC','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/11','sexo'=>'Masculino','direccion'=>'Calle la amargura','user_id'=>'30']);
Medico::Create(['ci'=>'6354242 SCZ','nombre'=>'CARMEN ROSA','paterno'=>'SALAS','materno'=>'BRAC','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/12','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'31']);
Medico::Create(['ci'=>'97291170 SCZ','nombre'=>'CHANEL','paterno'=>'RIVADINEIRA','materno'=>'C','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/13','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'32']);
Medico::Create(['ci'=>'6308705 SCZ','nombre'=>'CINTHIA','paterno'=>'AÑEZ','materno'=>'SALVATIC','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/14','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'33']);
Medico::Create(['ci'=>'4699199 SCZ','nombre'=>'CINTHIA','paterno'=>'MOLLO','materno'=>'','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/15','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'34']);
Medico::Create(['ci'=>'6354242 SCZ','nombre'=>'CLAUDIA PATRICIA','paterno'=>'CORTEZ','materno'=>'VALDAC','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/16','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'35']);
Medico::Create(['ci'=>'97291170 SCZ','nombre'=>'CORAL','paterno'=>'VARGAS','materno'=>'CHAVEC','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/17','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'36']);
Medico::Create(['ci'=>'6308705 SCZ','nombre'=>'DANIELA HELEN','paterno'=>'FLORES','materno'=>'RAMIRZD','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/18','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'37']);
Medico::Create(['ci'=>'4699199 SCZ','nombre'=>'DENIS MARTIN','paterno'=>'CASTILLO','materno'=>'LOZD','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/19','sexo'=>'Masculino','direccion'=>'Calle la amargura','user_id'=>'38']);


    }
}
