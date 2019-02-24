@extends('layouts/default')
    @section('title')
        IFA SITE     
    @endsection

    @section('mainContent')
    <h1>Project-Manager</h1>
    @foreach ($projects as $project)
        <p>{{$project->id}}. <a href="projects/{{$project->id}}">{{$project->title}}</a></p>
    @endforeach 
@endsection