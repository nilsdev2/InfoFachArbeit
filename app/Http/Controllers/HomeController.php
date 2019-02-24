<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User; 
use \App\Project;
use \App\asUser; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = \App\Project::all(); 
        $users = \App\User::all(); 
        $asUsers = \App\asUser::all();
        return view('home', ['projects' => $projects], ['users' => $users], ['asUsers' => $asUsers]); 
    }
}
