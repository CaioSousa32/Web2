<?php

namespace Database\Seeders;

use App\Models\nutriente;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NutrienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            nutriente::factory()->create([
                'user_id' => User::all()->random()->id
            ]);
        }
    }
}
