<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsDisplayController extends Controller
{
   

public function index() {
    $news = News::with('category')->latest()->paginate(6); // paginated
    return view('pages.news-events', compact('news'));
}

public function show($slug) {
    $newsItem = News::where('slug', $slug)->with('category')->firstOrFail();
    return view('pages.news-detail', compact('newsItem'));
}



}
