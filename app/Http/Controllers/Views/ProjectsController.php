<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function getView(Request $request)
    {
        return view('main',['page'=> 'projects']);
    }
}
