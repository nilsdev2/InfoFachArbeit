<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/ifa', 'ifaController@index'); 

Route::get('/projects', 'projectsController@index'); 
Route::get('/projects/new_project', 'projectsController@new_project_form'); 
Route::post('/projects/new_project', 'projectsController@new_project'); 