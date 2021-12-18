<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{

    private $projects = [
        [
            'project_type' => 'fullstack',
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
                 20,
                 22,
                 23,
                 25,
            ],
        ],
        [
            'project_type' => 'fullstack',
            'link' => 'https://magda.rmedico.com',
            'technologies' => [
                15,
                16,
                11,
                12,

            ],
        ],
        [
            'project_type' => 'backend',
            'link' => 'https://public-api.rmedico.com',
            'technologies' => [
                8,
                11,
                12,
                13,
                14,
                16,
                17,
                18,
                19,
            ],
        ],
        [
            'project_type' => 'frontend',
            'link' => 'https://vma.rmedico.com',
            'technologies' => [
                1,
                2,
                3,
                5,
                6,
                7,
                12,
                13,
                22,
                23,
                24,
                25,
            ],
        ],
        [
            'project_type' => 'frontend',
            'link' => 'https://dictionary.rmedico.com',
            'technologies' => [
                1,
                2,
                12,
                13,
                16,
                20,
                21,
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
