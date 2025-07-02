<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsDisplayController extends Controller
{
   

   public function index(Request $request)
{
    $query = News::with('category')->latest();

    if ($request->has('category')) {
        $query->whereHas('category', function ($q) use ($request) {
            $q->where('name', $request->category);
        });
    }

    $news = $query->paginate(6);
    $categories = NewsCategory::all();

    return view('news.index', compact('news', 'categories'));
}



}
