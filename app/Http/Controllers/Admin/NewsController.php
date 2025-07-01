<?php

namespace App\Http\Controllers\Admin;
use App\Models\NewsCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Mail\NewsUpdate;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('category')->latest()->paginate(10);
    return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $categories = NewsCategory::all();
        return view('admin.news.create', compact('categories'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'news_category_id' => 'required|exists:news_categories,id',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('news', 'public');
    }

    News::create($validated);
    
    foreach (Subscriber::all() as $subscriber) {

      Mail::to($subscriber->email)->queue(new NewsUpdate($news));
}

    return redirect()->route('admin.news.index')->with('success', 'News created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
