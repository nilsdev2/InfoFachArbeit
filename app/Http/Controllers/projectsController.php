<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project; 

class projectsController extends Controller
{
    public function index() {
        $projects = \App\Project::all(); 
        return view('projects.index', ['projects' => $projects]); 
    }
}
