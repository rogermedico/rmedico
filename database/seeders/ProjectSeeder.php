<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{

    private $projects = [
        [
            'name' => 'Intranet corporativa',
            'body' => 'hahaklasklad',
            'link' => 'https://capicua.rmedico.com',
             'technologies' => [
                 1,
                 2,
                 3,
            ],
        ],
        [
            'name' => 'Personal Webpage',
            'body' => 'hahaklasklaadsfdsadsf',
            'link' => 'https://magda.rmedico.com',
            'technologies' => [
                1
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
            foreach ($technologies as $technology) {
                $project->technologies()->attach($technology);
            }
        }
    }
}
