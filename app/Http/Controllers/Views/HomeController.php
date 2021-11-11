<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getView(Request $request)
    {
        return view('main',['page'=> 'home']);
    }
}
