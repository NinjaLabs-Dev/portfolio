<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder {
    public function run(): void {
        $projects = [
            [
                'name' => 'Cosmo',
                'project_url' => 'https://cosmo.ci',
                'overview' => 'A web based, FiveM player, staff and community management. Allowing staff members to manage player history and information easily. This custom solution integrates with multiple external services using APIs and a custom-made server-side script for information.',
                'order' => 0
            ],
            [
                'name' => 'United Gaming - LFB Discord Bot',
                'project_url' => 'https://github.com/NinjaLabs-Dev/ug-lfb-bot',
                'overview' => 'Discord bot to allow seamless integration between discord and google spreadsheets, mainly pulling and updating information on training and more.',
                'order' => 1
            ],
            [
                'name' => 'Radiocloud',
                'project_url' => null,
                'overview' => 'Custom panel for presenters of TruckersFM allowing users to interact with listeners and see data.',
                'order' => 2
            ],
            [
                'name' => 'Make Me Creative Plus',
                'project_url' => 'https://makemecreative.co.uk/',
                'overview' => 'Creating an online library of music and radio imaging for radio stations to subscribe and gain monthly access to download and stream audio clips to help with imaging production. This used VueJS as a front-end software with Laravel a Filament CRUD behind it. Using Stripe for payment processing too.',
                'order' => 3
            ],
            [
                'name' => 'Children\'s Trust Convoy',
                'project_url' => '',
                'overview' => 'A simple website to showcase my work and services. This website is a simple Laravel application with a custom-built admin panel to manage the content and a custom-built theme.',
                'order' => 4
            ],
            [
                'name' => 'Children’s Trust Convoy (Charity Event)',
                'project_url' => null,
                'overview' => 'Creating a website which displays info about the event, routes, slots and general information about The Children’s Trust charity. This also included a custom-made admin panel for updating data. This site also integrated into the donation site JustGiving and server hosting.',
                'order' => 5
            ],
            [
                'name' => 'GoXLR Utility (UI Work)',
                'project_url' => 'https://github.com/GoXLR-on-Linux/goxlr-ui',
                'overview' => 'GoXLR Utility is a tool to replace the GoXLR App (originally aimed towards Linux), this project then became "main stream" as the main GoXLR software team was laid off sadly. I\'ve done a few UI updates and bug fixes for the project.',
                'order' => 6
            ]
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}
