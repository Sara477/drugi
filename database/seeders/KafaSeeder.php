<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KafaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            \App\Models\Kafa::create([
                'naziv' => $faker->word,
                'opis' => $faker->sentence,
                'cena' => $faker->numberBetween(120, 540),
                'zemlja_id' => $faker->numberBetween(1, 20),
                'tip_id' => $faker->numberBetween(1, 4),
            ]);
        }
    }
}
