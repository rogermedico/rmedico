<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{

    private $projects = [
        [
            'name' => 'corporate intranet',
            'body' => '<p>Project that consists of an intranet for Capicua Serveis Educatius company to manage their employee information.
                The app has three roles (admin, moderator and employee), the admins and moderators can see and manage other users info.
                Every user has a personal profile that can fulfill and even the employees can send documents to the company.</p>
                <p>The project was made using Angular to implement the frontend and Laravel for the backend. It also has a dark mode and an
                email notification system for the new documents and other notifications.</p>
                <div>To access the demo you can use the following usernames and passwords:
                <ul><li>moderator@gmail.com - password</li><li>worker@gmail.com - password</li></ul></div> ',
            'link' => 'https://capicua.rmedico.com',
             'technologies' => [
                 1,
                 2,
                 3,
                 4,
                 5,
                 6,
                 7,
                 8,
                 9,
                 10,
                 11,
                 12,
                 13,
                 14,
            ],
        ],
        [
            'name' => 'personal webpage',
            'body' => '<p>Fully responsive personal webpage development for Dr. Magda Pascual-Borràs. Project was
                        made using Codeigniter 3 and Bootstrap.</p>',
            'link' => 'https://magda.rmedico.com',
            'technologies' => [
                15,
                16,
                11,
                12,

            ],
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->projects as $project) {
            $technologies = array_pop($project);
            $project = Project::create($project);
            foreach ($technologies as $id => $technology) {
                $project->technologies()->attach($technology, [
                    'order' => $id,
                ]);
            }
        }
    }
}
