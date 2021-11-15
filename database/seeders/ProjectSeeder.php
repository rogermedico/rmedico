<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{

    private $projects = [
        [
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
