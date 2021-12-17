<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function getView(Request $request)
    {

        $projects = Project::all()->map(function ($project){
            return $project->fill([
                    'name' => $project->locale(app()->getLocale())->name,
                    'body' => $project->locale(app()->getLocale())->body
            ]);
        });

        return view(
            'pages.projects',
            [
                'projects' => (object)[
                    'backend' => $projects->filter( function ($project){
                        return $project->project_type === 'backend';
                    })->values(),
                    'frontend' => $projects->filter( function ($project){
                        return $project->project_type === 'frontend';
                    })->values(),
                    'fullstack' => $projects->filter( function ($project){
                        return $project->project_type === 'fullstack';
                    })->values()
                ]
            ]
        );
    }
}
