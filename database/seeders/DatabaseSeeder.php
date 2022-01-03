<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(MedicoSeeder::class);
    
        
        $this->call(DepartamentoSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(RedSeeder::class);
        $this->call(EstablecimientoSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(LaboratoristaSeeder::class); 
       // $this->call(OrdenLaboratorioSeeder::class);
       
    }
}
