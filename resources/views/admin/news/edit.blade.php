{{-- resources/views/admin/news/edit.blade.php --}}

@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h2>Edit News</h2>

    {{-- This form is now CORRECT. --}}
    {{-- 'action' correctly points to the 'update' route and passes the news ID. --}}
    {{-- '@method('PUT')' correctly tells Laravel this is an UPDATE request. --}}
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        {{-- This include is a good practice for keeping your form fields organized. --}}
        @include('admin.news.form')

        <button type="submit" class="btn btn-success">Update News</button>
    </form>
</div>
@endsection