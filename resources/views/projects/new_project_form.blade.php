@extends('layouts/default')
    @section('title')
        NEW PROJECT SITE     
    @endsection

    @section('mainContent')
    
        <form method="POST" action="/projects/new_project">
            @csrf
            <input type="text" name="new_project_title" required placeholder="Der Titel von dem neuen Project">
            <input type="text" name="new_project_desc" required placeholder="Die Beschreibung von dem neuen Project"> 
            <input type="submit" value="erstellen"> 
        </form>
    @endsection
