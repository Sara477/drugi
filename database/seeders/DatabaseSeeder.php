<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => 'Sara',
             'email' => 'sara@gmail.com',
             'password' => bcrypt('sara123')
         ]);

            $this->call([
                ZemljaSeeder::class,
                TipSeeder::class,
                KafaSeeder::class,
            ]);
    }
}
