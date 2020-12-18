@extends('layouts.app')

@section('content')
    <h1>Create Project</h1>

    <form action="/projects.store" method="POST">
        {{ csrf_field() }} 
        <div class="form-group">
            <label for="title">Project name</label>
            <input type="text" class="form-control" name="title" placeholder="Add name of project">
        </div>

        <div class="form-group">
            <label for="github_link">GitHub link</label>
            <input type="text" class="form-control" name="github_link" placeholder="Enter github link">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" class="btn btn-success" value="Add" >
    </form>
@endsection