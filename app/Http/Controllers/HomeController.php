<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
       public function index()
    {
        return view('welcome'); // Or return a string like: return "Welcome Home!";
    }
}
