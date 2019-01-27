<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ifaController extends Controller
{
    public function index() {
        return view('ifa', ['test' => 'asd']); 
    }
}
