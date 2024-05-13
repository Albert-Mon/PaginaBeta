<?php

namespace Database\Factories;

use App\Models\Contacto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    protected $model = Contacto::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(),
            'compañia' => $this->faker->sentence(),
            'telefono' => $this->faker->randomNumber(5, true) ,
            'email' => fake()->unique()->safeEmail(),
            'asunto' => $this->faker->sentence(),
            'mensaje' => $this->faker->sentence(),
        ];
    }
}
