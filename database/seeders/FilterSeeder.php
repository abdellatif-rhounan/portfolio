<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Filter;

class FilterSeeder extends Seeder
{
    public function run(): void
    {
        $filters = ['tous', 'html-css-js', 'vue', 'php', 'laravel', 'wordpress'];

        foreach ($filters as $filter) {
            Filter::create([
                'name' => $filter,
            ]);
        }
    }
}
