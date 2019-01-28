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
    
    public function new_project_form() {
        return view('projects.new_project'); 
    }

    public function new_project() {
        $new_project = new Project; 
        $new_project->title = request('new_project_title');
        $new_project->desc = request('new_project_desc'); 
        $new_project->save(); 

        return view('projects.new_project'); 
    }
}
