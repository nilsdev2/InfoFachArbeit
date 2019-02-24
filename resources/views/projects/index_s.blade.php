@extends('layouts/default')
    @section('title')
        IFA SITE     
    @endsection

    @section('mainContent')
    @foreach ($projects as $project)

    <h1>{{$project->id}}. {{$project->title}}</h1>
    <p>{{$project->desc}}</p>
    @foreach ($project->asUser as $asUser)
        @foreach ($users->where('id', $asUser->user_id) as $as_user_full_info)
            <li>{{$asUser->id}}. {{ $as_user_full_info->name }}</li>
        @endforeach
    @endforeach


    <form method="POST" action="/projects/as_new_user">
        @csrf
        <input type="hidden" name="as_new_user_project_id" value="{{$project->id}}">
        <input type="hidden" name="as_new_user_user_id" value="{{ Auth::user()->id }}">
        <input type="submit" class="btn btn-link" value="Anmelden">
    </form>
    @endforeach 
@endsection