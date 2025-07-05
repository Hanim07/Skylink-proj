<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title', $news->title ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Category</label>
    <select name="news_category_id" class="form-control" required>
        <option value="">Select Category</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ old('news_category_id', $news->news_category_id ?? '') == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Excerpt</label>
    <textarea name="excerpt" class="form-control" rows="3" required>{{ old('excerpt', $news->excerpt ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Content</label>
    <textarea name="content" class="form-control" rows="6" required>{{ old('content', $news->content ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if(!empty($news->image))
        <img src="{{ asset('storage/' . $news->image) }}" width="120" class="mt-2">
    @endif
</div>
