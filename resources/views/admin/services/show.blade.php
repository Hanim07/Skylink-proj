@extends('admin.layouts.master')

@section('content')
    <h1>{{ $service->title }}</h1>

    <p><strong>Slug:</strong> {{ $service->slug }}</p>
    <p><strong>Category:</strong> {{ $service->category->name ?? 'Uncategorized' }}</p>
    <p><strong>Description:</strong> {{ $service->desc }}</p>

    <p><strong>Price:</strong> ETB {{ $service->price }}</p>

    <p><strong>Features:</strong></p>
    <ul>
        @foreach($service->features as $feature)
            <li>{{ $feature }}</li>
        @endforeach
    </ul>

    <p><strong>Image:</strong></p>
    <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" width="300">

    <br><br>
    <a href="{{ route('services.edit', $service->id) }}">Edit</a>
    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Delete this service?')">Delete</button>
    </form>
    <br><br>
    <a href="{{ route('admin.services.index') }}">Back to list</a>
@endsection
