<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => $this->faker->unique()->randomNumber(9),
            'name' => $this->faker->name,
            'celular' => '31' . $this->faker->numberBetween(1, 9) . $this->faker->randomNumber(7),
            'email' => $this->faker->unique()->safeEmail,
            'notas' => $this->faker->sentence,
        ];
    }
}
