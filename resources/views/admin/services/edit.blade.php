@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">✏️ Edit Service</h2>

    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Slug</label>
                <input name="slug" value="{{ old('slug', $service->slug) }}" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Title</label>
                <input name="title" value="{{ old('title', $service->title) }}" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="desc" class="form-control" rows="4" required>{{ old('desc', $service->desc) }}</textarea>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Current Image</label><br>
                <img src="{{ asset($service->image) }}" alt="Service Image" class="img-thumbnail mb-2" style="max-height: 150px;">
                <input type="file" name="image" class="form-control" onchange="previewImage(event)">
                <img id="imagePreview" class="img-thumbnail mt-2" style="display: none; max-height: 150px;">
            </div>

            <div class="col-md-6">
                <label class="form-label">Price (ETB)</label>
                <input name="price" value="{{ old('price', $service->price) }}" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-select" required>
                <option value="">Select Category</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $service->category_id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Features</label>
            <div id="feature-list">
                @foreach ($service->features as $feature)
                    <div class="input-group mb-2">
                        <input type="text" name="features[]" class="form-control" value="{{ $feature }}" required>
                        <button class="btn btn-danger remove-feature" type="button">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-primary" id="add-feature">Add Feature</button>
        </div>

        <button type="submit" class="btn btn-success mt-3">💾 Update Service</button>
    </form>
</div>

@push('scripts')
<script>
    // Add new feature input
    document.getElementById('add-feature').addEventListener('click', function () {
        const featureList = document.getElementById('feature-list');
        const inputGroup = document.createElement('div');
        inputGroup.classList.add('input-group', 'mb-2');
        inputGroup.innerHTML = `
            <input type="text" name="features[]" class="form-control" placeholder="Enter feature" required>
            <button class="btn btn-danger remove-feature" type="button">Remove</button>
        `;
        featureList.appendChild(inputGroup);
    });

    // Remove feature input
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-feature')) {
            e.target.closest('.input-group').remove();
        }
    });

    // Preview new image
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endpush
@endsection
