<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipovi = [
            'Arabica',
            'Robusta',
            'Liberica',
            'Excelsa',
        ];

        foreach ($tipovi as $tip) {
            \App\Models\Tip::create([
                'tip' => $tip,
            ]);
        }
    }
}
