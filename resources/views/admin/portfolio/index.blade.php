@extends('layouts.master')

@section('title', 'Manage Portfolio Projects')

@section('content')
<div class="container py-5">
    <h2>Portfolio Projects</h2>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary mb-4">Add New Project</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
            <tr>
                <td><img src="{{ asset('storage/' . $project->image) }}" width="100" alt="{{ $project->title }}"></td>
                <td>{{ $project->title }}</td>
                <td>{{ Str::limit($project->description, 80) }}</td>
                <td>
                    <a href="{{ route('admin.portfolio.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.portfolio.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this project?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">No projects found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $projects->links() }}
</div>
@endsection
