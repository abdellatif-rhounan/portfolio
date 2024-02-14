<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technologie;

class TechnologieSeeder extends Seeder
{
    public function run(): void
    {
        $technologies = ['html-css-js', 'vue', 'php', 'laravel', 'wordpress'];

        foreach ($technologies as $technologie) {
            Technologie::create([
                'name' => $technologie,
            ]);
        }
    }
}
