@extends('layouts.app')

@section('content')
    <h1>Services</h1>
    <a href="{{ route('services.create') }}">+ Add New</a>

    <ul>
        @foreach ($services as $service)
            <li>
                <strong>{{ $service->title }}</strong> ({{ $service->category->name ?? 'Uncategorized' }}) - ETB {{ $service->price }}
                <a href="{{ route('services.edit', $service->id) }}">Edit</a>
                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
