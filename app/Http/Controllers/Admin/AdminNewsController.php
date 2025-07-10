<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Str;


class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    



public function index() {
    $news = News::with('category')->latest()->get();
    return view('admin.news.index', compact('news'));
}

public function create() {
    $categories = NewsCategory::all();
    return view('admin.news.create', compact('categories'));
}

public function store(Request $request) {

Log::info('Store method called for news creation.');

    Log::info('Request data:', $request->all());

    $data = $request->validate([
        'title' => 'required',
        'news_category_id' => 'required',
        'excerpt' => 'required',
        'content' => 'required',
        'image' => 'nullable|image',
    ]);

    
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('news', 'public');
    }

    $data['slug'] = Str::slug($data['title']) . '-' . time();

    News::create($data);

    return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
}

public function edit(News $news) {
    $categories = NewsCategory::all();
    return view('admin.news.edit', compact('news', 'categories'));
}

public function update(Request $request, News $news) {
    $data = $request->validate([
        'title' => 'required',
        'news_category_id' => 'required',
        'excerpt' => 'required',
        'content' => 'required',
        'image' => 'nullable|image',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('news', 'public');
    }

    $data['slug'] = Str::slug($data['title']) . '-' . time();

    $news->update($data);

    return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
}



public function destroy($id) { // <-- Accept the raw ID from the route
    $news = News::findOrFail($id); // <-- Manually find the news item
    $news->delete();
    return redirect()->route('admin.news.index')->with('success', 'News deleted.');
}
}




