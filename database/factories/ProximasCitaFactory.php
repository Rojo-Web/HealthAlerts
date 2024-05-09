<?php

namespace Database\Factories;

use App\Models\ProximasCita;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProximasCitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProximasCita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'paciente_id' => Paciente::factory(),
            'descripcion' => $this->faker->sentence,
            'copago' => $this->faker->randomFloat(2, 0, 1000),
            'fechaCita' => $this->faker->dateTimeThisMonth(), 
        ];
    }
}
