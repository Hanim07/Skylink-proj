@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">📋 Services List</h1>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
            + Add New Service
        </a>
    </div>

    @if($services->isEmpty())
        <div class="alert alert-info">No services found. Click "Add New Service" to get started.</div>
    @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($services as $service)
                <div class="col">
                    <div class="card shadow-sm h-100">
                        @if($service->image)
                            <img src="{{ asset($service->image) }}" class="card-img-top" alt="{{ $service->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <span class="badge bg-info mb-2">
                                {{ $service->category->name ?? 'Uncategorized' }}
                            </span>
                            <p class="card-text text-muted mb-2">💰 ETB {{ $service->price }}</p>

                            @if($service->features && is_array($service->features))
                                <ul class="list-group list-group-flush mb-3">
                                    @foreach ($service->features as $feature)
                                        <li class="list-group-item small">✅ {{ $feature }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="mt-auto d-flex justify-content-between">
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-outline-warning">
                                    ✏️ Edit
                                </a>

                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        🗑️ Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
