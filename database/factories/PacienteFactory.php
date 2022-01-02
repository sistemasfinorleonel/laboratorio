<?php

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Paciente::class;

    public function definition()
    {
        return [
            
            'ci'=>$this->faker->name(),
            'nombre'=>$this->faker->name(),
            'paterno'=>$this->faker->name(),
            'materno'=>$this->faker->name(),
            'telefono'=>$this->faker->text(),
            'fecha_nacimiento'=>$this->faker->randomElement(['05/08/2000','15/09/1998','12/02/1995','23/05/1990']),
            'edad'=>$this->faker->number_format(),
            'año'=> $this->faker->randomElement(['Masculino','Femenino']),
            'direccion'=>$this->faker->name(),
            'user_id'=>User::all()->random()->id,
        ];
    }
}
