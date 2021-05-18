@extends('layouts.app')

@section('content')
<h1 style="text-align:center; margin-top: 4rem; margin-bottom:3rem;"> Add a New Project</h1>
@if($errors->any())
<div style="margin-top:1em; margin-bottom:1em; padding-left:10%">
    @foreach($errors->all() as $error)
    <li class="errors">{{$error}}</li>
    @endforeach
</div>
@endif
<div class="project-details-container">
    <!-- Content here -->
    <div class="add-project-form">
        <form action='/projects' method='POST' enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Project Name</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Project Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Project Description</label>
                    <textarea type="text" class="form-control" name="description" id="description" placeholder="Project Description"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Project Start Date">
                </div>
                <div class="form-group col-md-6">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" name="end_date" id="end_date" placeholder="Project End Date">
                </div>

                <div class="form-group col-md-6">
                    <label for="background_image_url">Background Image</label>
                    <input type='file' class="form-control" name="background_image_url" id="background_image_url" placeholder="Background Image">
                    </input>
                </div>
                <div class="form-group col-md-6">
                    <label for="avatar_image_url">Avatar Image</label>
                    <input type='file' class="form-control" name="avatar_image_url" id="avatar_image_url" placeholder="Avatar Image">
                    </input>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Add Project</button>
        </form>


    </div>

    @endsection