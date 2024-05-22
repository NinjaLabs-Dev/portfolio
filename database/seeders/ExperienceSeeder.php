<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder {
    public function run(): void {
        $workExperience = [
            [
                'name' => 'United Gaming',
                'order' => 0,
                'external_url' => 'https://ugnetwork.net',
                'start_date' => '2022-09-21',
                'end_date' => null,
                'overview' => 'A large FiveM community with thousands of registered users and hundreds of active players. Work consists of game script development for direct player interaction, custom external scripts for management and overall.',
                'roles' => [
                    [
                        'name' => 'Head of Development & Creative Design',
                        'order' => 0,
                        'start_date' => '2023-03-28',
                        'end_date' => null,
                    ],
                    [
                        'name' => 'Developer',
                        'order' => 1,
                        'start_date' => '2022-11-08',
                        'end_date' => '2023-03-28',
                    ],
                    [
                        'name' => 'General Staff (Support, Mod & Admin)',
                        'order' => 2,
                        'start_date' => '2022-09-21',
                        'end_date' => '2022-11-08',
                    ]
                ]
            ],
            [
                'name' => 'SYPO',
                'order' => 1,
                'external_url' => 'https://sypo.uk',
                'start_date' => '2020-12-17',
                'end_date' => null,
                'overview' => 'A small team working with multiple household brands to provide bespoke systems from event management to basic webpages using software like WordPress and Laravel. Using packages like Laravel Backpack to create CRUD style admin panels.',
                'roles' => [
                    [
                        'name' => 'Web Developer',
                        'order' => 0,
                        'start_date' => '2021-12-01',
                        'end_date' => null,
                    ],
                    [
                        'name' => 'Junior Web Developer',
                        'order' => 1,
                        'start_date' => '2020-12-17',
                        'end_date' => '2021-12-01',
                    ]
                ]
            ],
            [
                'name' => 'Little Los Santos RP',
                'order' => 2,
                'external_url' => null,
                'start_date' => '2019-09-20',
                'end_date' => '2020-10-20',
                'overview' => 'Worked on MDT (Mobile Data Terminal) for a FiveM roleplay server, this consisted of a login panel which allowed record management for police, medical and fire services. It also linked with multiple databases to gain information about users within the virtual city.',
                'roles' => [
                    [
                        'name' => 'Developer',
                        'order' => 0,
                        'start_date' => '2019-09-20',
                        'end_date' => '2020-10-20',
                    ],
                ]
            ],
            [
                'name' => 'TruckersFM Media Group',
                'order' => 3,
                'external_url' => 'https://truckers.fm',
                'start_date' => '2018-09-07',
                'end_date' => '2022-11-16',
                'overview' => 'Work for TruckersFM consisted from developing a login panel for presenters to login into and access data like requests, listener stats, song playback and more. I also worked with the main website allowing listeners to check stats, send requests and more.',
                'roles' => [
                    [
                        'name' => 'Developer',
                        'order' => 0,
                        'start_date' => '2023-03-28',
                        'end_date' => '2022-11-16',
                    ],
                    [
                        'name' => 'Presenter',
                        'order' => 1,
                        'start_date' => '2018-09-07',
                        'end_date' => '2022-11-16',
                    ]
                ]
            ],
        ];

        foreach ($workExperience as $experience) {
            $roles = $experience['roles'];
            unset($experience['roles']);

            $experience = \App\Models\Experience::create($experience);

            foreach ($roles as $role) {
                $experience->roles()->create($role);
            }
        }
    }
}
