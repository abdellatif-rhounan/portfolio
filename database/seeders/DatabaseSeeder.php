<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            FilterSeeder::class,
            TechnologieSeeder::class,
            ProjectSeeder::class,
            InformationSeeder::class,
        ]);

        $project_technologie = [
            [1, 2],
            [1, 4],
            [2, 2],
            [3, 4],
            [4, 3],
        ];

        foreach ($project_technologie as $relation) {
            DB::table('project_technologie')->insert([
                'project_id' => $relation[0],
                'technologie_id' => $relation[1],
            ]);
        }
    }
}
