@extends('layouts.app')

@section('content')
<div class="landing-header">
    <h1>Projects</h1>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="landing-btn">
        @foreach ($projects as $project)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$project->name}}</h5>
                <p class="card-text">{{$project->description}}</p>
                <a href="/tasks" class="btn btn-primary">View Board</a>
            </div>
        </div>
        @endforeach
        @if ($userRole === 4)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Add a new project</h5>
                <p class="card-text">-----></p>
                <a href="/projects/create" class="btn btn-success">New Project</a>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection 