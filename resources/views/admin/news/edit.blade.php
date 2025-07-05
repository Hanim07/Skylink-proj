@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Edit News</h2>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.news.form')
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
