@extends('layouts.master')

@section('title', 'Add New Project')

@section('content')
<div class="container py-5">
    <h2>Add New Portfolio Project</h2>

    <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Project Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Project Description</label>
            <textarea name="description" class="form-control" rows="5" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image">Project Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save Project</button>
        <a href="{{ route('admin.portfolio.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
