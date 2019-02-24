<?php

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/ifa', 'ifaController@index'); 

Route::get('/projects', 'projectsController@index'); 
Route::get('/projects/{id}', ['uses' => 'projectsController@index_s']);

Route::get('/projects/new_project_form', 'projectsController@new_project_form'); 
Route::post('/projects/new_project', 'projectsController@new_project'); 

Route::post('/projects/as_new_user', 'projectsController@as_new_user'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
