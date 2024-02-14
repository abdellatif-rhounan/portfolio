<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'name' => 'portfolio',
                'description' => 'Ce projet est un portfolio personel a comme but de lister mes projets personel.',
                'link' => 'https://abdellatif-portfolio-app.netlify.app/',
                'img_src' => 'portfolio.png',
            ],

            [
                'name' => 'todo-app',
                'description' => 'Ce projet est une application Todo.',
                'link' => 'https://abdellatif-todo-app.netlify.app/',
                'img_src' => 'todo-app.png',
            ],

            [
                'name' => 'employees-manager',
                'description' => 'Ce projet est une simple application pour gérer les employees.',
                'link' => 'https://github.com/abdellatif-rhounan/employees-manager',
                'img_src' => 'employees-manager.png',
            ],

            [
                'name' => 'employees-php',
                'description' => 'Ce projet est une simple application pour gérer les employees.',
                'link' => 'https://github.com/abdellatif-rhounan/employees-php',
                'img_src' => 'employees-php.png',
            ],
        ];

        foreach ($projects as $project) {
            Project::create([
                'name' => $project['name'],
                'description' => $project['description'],
                'link' => $project['link'],
                'img_src' => $project['img_src'],
            ]);
        }
    }
}
