@extends('layouts.app')

@section('content')
    <h1>Edit Service</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input name="slug" placeholder="Slug" value="{{ old('slug', $service->slug) }}" required>

        <input name="title" placeholder="Title" value="{{ old('title', $service->title) }}" required>

        <textarea name="desc" placeholder="Description">{{ old('desc', $service->desc) }}</textarea>

        <p>Current Image:</p>
        <img src="{{ asset($service->image) }}" alt="Service Image" width="200">
        <p>Change Image:</p>
        <input type="file" name="image">

        <input name="price" placeholder="Price" value="{{ old('price', $service->price) }}">

        <select name="category_id" required>
            <option value="">Select Category</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $service->category_id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>

        <p>Features:</p>
        <textarea name="features[]" placeholder="Enter each feature on a new line" rows="6">@foreach($service->features as $feature){{ $feature }}&#10;@endforeach</textarea>

        <button type="submit">Update Service</button>
    </form>
@endsection
