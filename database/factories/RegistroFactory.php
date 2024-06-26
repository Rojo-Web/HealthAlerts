<?php

namespace Database\Factories;

use App\Models\Registro;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

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
            'medioComunicacion' => $this->faker->randomElement(['Teléfono', 'Correo electrónico', 'WhatsApp']),
            'descripcion' => $this->faker->sentence,
            'fechaRegistro' => $this->faker->dateTimeThisYear(),
        ];
    }
}
