@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Create News</h2>

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.news.form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
