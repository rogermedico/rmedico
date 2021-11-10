<?php

namespace App\Http\Controllers\views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request, string $name = null)
    {
        return view('main',['user'=> $name]);
    }
}
