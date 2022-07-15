<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nutriente>
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
            'carboidratos' => $this->faker->name(),
            'proteinas' => $this->faker->name(),
            'agua' => $this->faker->name(),
            'vitaminas' => $this->faker->name(),
            'fibras' => $this->faker->name()
        ];
    }
}
