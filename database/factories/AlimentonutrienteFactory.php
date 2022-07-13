<?php

namespace Database\Factories;

use App\Models\alimento;
use App\Models\nutriente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alimentonutriente>
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
            'alimento_id' => alimento::all()->random()->id,
            'nutriente_id' => nutriente::all()->random()->id,
        ];
    }
}
