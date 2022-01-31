<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laboratorista;

class LaboratoristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'ABIGAIL','paterno'=>'DURAN','materno'=>'ESPINOZA','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/1','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'1']);
    Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'ADRIN','paterno'=>'VIERA','materno'=>'LOPZA','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/2','sexo'=>'Masculino','direccion'=>'calla angel gutierrez','user_id'=>'2']);
    Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'ALEX JOSEPH','paterno'=>'HERRERA','materno'=>'RIVEZA','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/3','sexo'=>'Masculino','direccion'=>'Calle la amargura','user_id'=>'3']);
// Laboratorista::Create(['ci'=>'6354242 SCZ','nombre'=>'ANA CRISTINA','paterno'=>'VELIZ','materno'=>'ESCALEZA','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/4','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'33']);
// Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'ANA MARIA','paterno'=>'VASQUEZ','materno'=>'FERNA','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/5','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'34']);
// Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'ANGEL','paterno'=>'PINTO','materno'=>'VEZA','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/6','sexo'=>'Masculino','direccion'=>'calla angel gutierrez','user_id'=>'35']);
// Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'ANGELA','paterno'=>'RODRIGUEZ','materno'=>'SURA','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/7','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'36']);
// Laboratorista::Create(['ci'=>'6354242 SCZ','nombre'=>'BAT SEBA','paterno'=>'CALLA','materno'=>'CUEVASOB','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/8','sexo'=>'Masculino','direccion'=>'calla angel gutierrez','user_id'=>'37']);
// Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'BRENDA ANAHI','paterno'=>'ROJAS','materno'=>'GOMZB','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/9','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'38']);
// Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'CARLA PATRICIA','paterno'=>'ARANA','materno'=>'','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/10','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'39']);
// Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'CARLOS ALFREDO','paterno'=>'ORTIZ','materno'=>'VILAROZC','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/11','sexo'=>'Masculino','direccion'=>'Calle la amargura','user_id'=>'40']);
// Laboratorista::Create(['ci'=>'6354242 SCZ','nombre'=>'CARMEN ROSA','paterno'=>'SALAS','materno'=>'BRAC','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/12','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'41']);
// Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'CHANEL','paterno'=>'RIVADINEIRA','materno'=>'C','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/13','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'42']);
// Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'CINTHIA','paterno'=>'AÑEZ','materno'=>'SALVATIC','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/14','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'43']);
// Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'CINTHIA','paterno'=>'MOLLO','materno'=>'','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/15','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'44']);
// Laboratorista::Create(['ci'=>'6354242 SCZ','nombre'=>'CLAUDIA PATRICIA','paterno'=>'CORTEZ','materno'=>'VALDAC','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/16','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'45']);
// Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'CORAL','paterno'=>'VARGAS','materno'=>'CHAVEC','telefono'=>'70066505','fecha_nacimiento'=>'1986/1/17','sexo'=>'Femenino','direccion'=>'Calle la amargura','user_id'=>'46']);
// Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'DANIELA HELEN','paterno'=>'FLORES','materno'=>'RAMIRZD','telefono'=>'60020151','fecha_nacimiento'=>'1986/1/18','sexo'=>'Femenino','direccion'=>'calla angel gutierrez','user_id'=>'47']);
// Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'DENIS MARTIN','paterno'=>'CASTILLO','materno'=>'LOZD','telefono'=>'60992917','fecha_nacimiento'=>'1986/1/19','sexo'=>'Masculino','direccion'=>'Calle la amargura','user_id'=>'48']);
/* 
Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'ABIGAIL','paterno'=>'DURAN','materno'=>'ESPINOZA','telefono'=>'60992917','fecha_nacimiento'=>'1/1/1986','sexo'=>'F','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'ADRIN','paterno'=>'VIERA','materno'=>'LOPZA','telefono'=>'70066505','fecha_nacimiento'=>'2/1/1986','sexo'=>'M','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'ALEX JOSEPH','paterno'=>'HERRERA','materno'=>'RIVEZA','telefono'=>'60020151','fecha_nacimiento'=>'3/1/1986','sexo'=>'M','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6354242 SCZ','nombre'=>'ANA CRISTINA','paterno'=>'VELIZ','materno'=>'ESCALEZA','telefono'=>'60992917','fecha_nacimiento'=>'4/1/1986','sexo'=>'F','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'ANA MARIA','paterno'=>'VASQUEZ','materno'=>'FERNA','telefono'=>'70066505','fecha_nacimiento'=>'5/1/1986','sexo'=>'F','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'ANGEL','paterno'=>'PINTO','materno'=>'VEZA','telefono'=>'60020151','fecha_nacimiento'=>'6/1/1986','sexo'=>'M','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'ANGELA','paterno'=>'RODRIGUEZ','materno'=>'SURA','telefono'=>'60992917','fecha_nacimiento'=>'7/1/1986','sexo'=>'F','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6354242 SCZ','nombre'=>'BAT SEBA','paterno'=>'CALLA','materno'=>'CUEVASOB','telefono'=>'70066505','fecha_nacimiento'=>'8/1/1986','sexo'=>'M','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'BRENDA ANAHI','paterno'=>'ROJAS','materno'=>'GOMZB','telefono'=>'60020151','fecha_nacimiento'=>'9/1/1986','sexo'=>'F','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'CARLA PATRICIA','paterno'=>'ARANA','materno'=>'','telefono'=>'60992917','fecha_nacimiento'=>'10/1/1986','sexo'=>'F','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'CARLOS ALFREDO','paterno'=>'ORTIZ','materno'=>'VILAROZC','telefono'=>'70066505','fecha_nacimiento'=>'11/1/1986','sexo'=>'M','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6354242 SCZ','nombre'=>'CARMEN ROSA','paterno'=>'SALAS','materno'=>'BRAC','telefono'=>'60020151','fecha_nacimiento'=>'12/1/1986','sexo'=>'F','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'CHANEL','paterno'=>'RIVADINEIRA','materno'=>'C','telefono'=>'60992917','fecha_nacimiento'=>'13/1/1986','sexo'=>'F','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'CINTHIA','paterno'=>'AÑEZ','materno'=>'SALVATIC','telefono'=>'70066505','fecha_nacimiento'=>'14/1/1986','sexo'=>'F','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'CINTHIA','paterno'=>'MOLLO','materno'=>'','telefono'=>'60020151','fecha_nacimiento'=>'15/1/1986','sexo'=>'F','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6354242 SCZ','nombre'=>'CLAUDIA PATRICIA','paterno'=>'CORTEZ','materno'=>'VALDAC','telefono'=>'60992917','fecha_nacimiento'=>'16/1/1986','sexo'=>'F','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'97291170 SCZ','nombre'=>'CORAL','paterno'=>'VARGAS','materno'=>'CHAVEC','telefono'=>'70066505','fecha_nacimiento'=>'17/1/1986','sexo'=>'F','direccion'=>'Calle la amargura','user_id'=>'1']);
Laboratorista::Create(['ci'=>'6308705 SCZ','nombre'=>'DANIELA HELEN','paterno'=>'FLORES','materno'=>'RAMIRZD','telefono'=>'60020151','fecha_nacimiento'=>'18/1/1986','sexo'=>'F','direccion'=>'calla angel gutierrez','user_id'=>'1']);
Laboratorista::Create(['ci'=>'4699199 SCZ','nombre'=>'DENIS MARTIN','paterno'=>'CASTILLO','materno'=>'LOZD','telefono'=>'60992917','fecha_nacimiento'=>'19/1/1986','sexo'=>'M','direccion'=>'Calle la amargura','user_id'=>'1']);

 */
    }
}
