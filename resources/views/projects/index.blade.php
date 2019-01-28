@extends('layouts/default')
    @section('title')
        IFA SITE     
    @endsection

    @section('mainContent')
    @foreach ($projects as $project)
        <p>{{$project->title}} - {{$project->desc}}</p>
    @endforeach
    @endsection