<?php

namespace Database\Seeders;

use App\Models\Alimento;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            Alimento::factory()->create([
                'user_id' => User::all()->random()->id
            ]);
        }
    }
}
