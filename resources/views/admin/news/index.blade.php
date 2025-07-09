{{-- resources/views/admin/news/index.blade.php --}}

@extends('admin.layouts.master')

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
            @forelse($news as $item) {{-- Using @forelse is slightly better in case $news is empty --}}
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->category->name ?? '—' }}</td>
                <td>{{ Str::limit($item->excerpt, 50) }}</td>
                <td>{{ $item->created_at->format('Y-m-d') }}</td>
                <td>
                    {{-- This Edit link is correct --}}
                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    {{-- This Delete form is now CORRECT. --}}
                    {{-- 'action' correctly points to the 'destroy' route. --}}
                    {{-- '@method('DELETE')' correctly tells Laravel this is a DELETE request. --}}
                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No news items found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection