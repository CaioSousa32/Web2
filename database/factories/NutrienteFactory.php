<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nutriente>
 */
class NutrienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'carboidrato' => $this->faker->name(),
            'proteina' => $this->faker->name(),
            'agua' => $this->faker->name(),
            'vitamina' => $this->faker->name(),
            'fibras' => $this->faker->name()
        ];
    }
}
