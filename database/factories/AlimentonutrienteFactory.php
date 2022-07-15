<?php

namespace Database\Factories;

use App\Models\Alimento;
use App\Models\Nutriente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alimentonutriente>
 */
class AlimentonutrienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alimento_id' => Alimento::all()->random()->id,
            'nutriente_id' => Nutriente::all()->random()->id,
        ];
    }
}
