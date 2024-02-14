<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Information;

class InformationSeeder extends Seeder
{
    public function run(): void
    {
        $informations = [
            [
                'key' => 'resume',
                'value' => 'https://drive.google.com/file/d/1QFiquw0YiB3MFyFa4Bk5_Gzzshwtazdo/view?usp=sharing',
            ],
            [
                'key' => 'mail',
                'value' => 'abdellatif.rhounan@gmail.com',
            ],
            [
                'key' => 'github',
                'value' => 'https://www.github.com/abdellatif-rhounan',
            ],
            [
                'key' => 'linkedin',
                'value' => 'https://www.linkedin.com/in/abdellatif-rhounan',
            ],
            [
                'key' => 'phone',
                'value' => '+212614171911',
            ],
            [
                'key' => 'whatsapp',
                'value' => '+212614171911',
            ],
            [
                'key' => 'youtube',
                'value' => '#',
            ],
            [
                'key' => 'home_photo',
                'value' => 'storage/images/developer.png',
            ],
            [
                'key' => 'about_photo',
                'value' => 'storage/images/about-profile.png',
            ],
            [
                'key' => 'description',
                'value' => 'Développeur Full Stack',
            ],
            [
                'key' => 'firstname',
                'value' => 'Abdellatif',
            ],
            [
                'key' => 'lastname',
                'value' => 'Rhounan',
            ],
            [
                'key' => 'job',
                'value' => 'Ouvert',
            ],
            [
                'key' => 'bio_1',
                'value' => 'Je suis un développeur Full Stack créatif, passionné par le développement informatique et la création de solutions innovantes.',
            ],
            [
                'key' => 'bio_2',
                'value' => "J'excelle dans la création des applications dynamiques en gardant à l'esprit une visualisation attrayante, des performances solides et une bonne expérience utilisateur.",
            ],
            [
                'key' => 'bio_3',
                'value' => "Pendant mon temps libre, j'aime lire des livres et regarder les matchs de mon équipe préférée.",
            ],
            [
                'key' => 'greeting',
                'value' => "Bonjour, Je suis",
            ],
        ];

        foreach ($informations as $information) {
            Information::create([
                'key' => $information['key'],
                'value' => $information['value'],
            ]);
        }
    }
}
