@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">🛠️ Create New Service</h2>

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="e.g. web-apps" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Service title" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="desc" class="form-control" rows="4" placeholder="Detailed service description" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" required>
    @foreach ($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
</select>


        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Price (ETB)</label>
                <input type="text" name="price" class="form-control" placeholder="e.g. 1000">
            </div>

            <div class="col-md-6">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" onchange="previewImage(event)" required>
                <img id="imagePreview" src="#" alt="Image Preview" class="img-thumbnail mt-2" style="display: none; max-height: 150px;">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Features</label>
            <div id="feature-list">
                <div class="input-group mb-2">
                    <input type="text" name="features[]" class="form-control" placeholder="Enter feature" required>
                    <button class="btn btn-danger remove-feature" type="button">Remove</button>
                </div>
            </div>
            <button class="btn btn-primary" id="add-feature" type="button">Add Feature</button>
        </div>

        <button type="submit" class="btn btn-success mt-3">🚀 Create Service</button>
    </form>
</div>

{{-- Bootstrap Feature & Image Preview Scripts --}}
@push('scripts')
<script>
    // Feature add/remove functionality
    document.getElementById('add-feature').addEventListener('click', function () {
        const featureList = document.getElementById('feature-list');
        const newFeature = document.createElement('div');
        newFeature.classList.add('input-group', 'mb-2');
        newFeature.innerHTML = `
            <input type="text" name="features[]" class="form-control" placeholder="Enter feature" required>
            <button class="btn btn-danger remove-feature" type="button">Remove</button>
        `;
        featureList.appendChild(newFeature);
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-feature')) {
            e.target.closest('.input-group').remove();
        }
    });

    // Image preview
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endpush
@endsection
