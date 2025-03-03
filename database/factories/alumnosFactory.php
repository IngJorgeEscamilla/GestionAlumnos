<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class alumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => fake(),
            'matricula' => fake(),
            'semestre' => fake(),
            'email' => fake()->unique()->safeEmail(),
            'telefono' => $this->faker->randomNumber(nbDigits:10),
        ];
    }
}
