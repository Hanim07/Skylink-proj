@extends('layouts.master')

@section('title', 'Edit Project')

@section('content')
<div class="container py-5">
    <h2>Edit Portfolio Project</h2>

    <form action="{{ route('admin.portfolio.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Project Title</label>
            <input type="text" name="title" value="{{ $project->title }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Project Description</label>
            <textarea name="description" class="form-control" rows="5" required>{{ $project->description }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Current Image</label><br>
            <img src="{{ asset('storage/' . $project->image) }}" width="150" alt="{{ $project->title }}">
        </div>

        <div class="form-group mb-3">
            <label for="image">Change Image (optional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
        <a href="{{ route('admin.portfolio.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
