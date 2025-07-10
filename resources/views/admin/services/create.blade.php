@extends('layouts.app')

@section('content')
    <h1>Create Service</h1>

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input name="slug" placeholder="Slug" required>
        <input name="title" placeholder="Title" required>
        <textarea name="desc" placeholder="Description"></textarea>
        <input type="file" name="image" required>
        <input name="price" placeholder="Price">
        <select name="category_id" required>
            <option value="">Select Category</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        <textarea name="features[]" placeholder="Features, separate by line" required></textarea>
        <button type="submit">Create</button>
    </form>
@endsection
