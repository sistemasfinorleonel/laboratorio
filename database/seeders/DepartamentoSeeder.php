<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::Create(['nombre'=>'Chuquisaca','sigla'=>'CHQ']);
        Departamento::Create(['nombre'=>'La Paz','sigla'=>'LPZ']);
        Departamento::Create(['nombre'=>'Cochabamba','sigla'=>'CBB']);
        Departamento::Create(['nombre'=>'Oruro','sigla'=>'ORU']);
        Departamento::Create(['nombre'=>'Potosí','sigla'=>'PTO']);
        Departamento::Create(['nombre'=>'Tarija','sigla'=>'TJA']);
        Departamento::Create(['nombre'=>'Santa Cruz','sigla'=>'SCZ']);
        Departamento::Create(['nombre'=>'Beni','sigla'=>'BEN']);
        Departamento::Create(['nombre'=>'Pando','sigla'=>'PDO']);
    }
}
