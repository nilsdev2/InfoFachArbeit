<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;
use \App\asUser; 
class projectsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $projects = \App\Project::all(); 
        return view('projects.index', ['projects' => $projects]); 
    }

    public function index_s($id) {
        $projects = \App\Project::all()->where('id', $id); 
        $users = \App\User::all();
        return view('projects.index_s', ['projects' => $projects], ['users' => $users]); 
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
    
    public function as_new_user() {
        $as_new_user = new asUser; 
        $as_new_user->project_id = request('as_new_user_project_id'); 
        $as_new_user->user_id = request('as_new_user_user_id'); 
        $as_new_user->save(); 

        return view('projects.as_true');
    }
}
