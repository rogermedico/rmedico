<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function getView(Request $request)
    {
        return view(
            'main',
            [
                'page'=> 'projects',
                'projects' => Project::all(),
            ]
        );
    }
}
