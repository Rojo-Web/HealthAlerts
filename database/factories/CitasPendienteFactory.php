<?php

namespace Database\Factories;

use App\Models\CitasPendiente;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasPendienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CitasPendiente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'paciente_id' => function () {
                return Paciente::factory()->create()->cedula;
            },
            'descripcion' => $this->faker->sentence,
            'solicitud' => $this->faker->sentence,
            'fechaSolicitud' => $this->faker->dateTimeThisYear(),
        ];
    }
}
