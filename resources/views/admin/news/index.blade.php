@extends('layouts.master')

@section('content')
<div class="container">
    <h2>News List</h2>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Create News</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Excerpt</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->category->name ?? '—' }}</td>
                <td>{{ Str::limit($item->excerpt, 50) }}</td>
                <td>{{ $item->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
