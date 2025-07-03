<?php

use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::post('/quote/request', [ServicesController::class, 'requestQuote'])->name('quote.request');

// Portfolio routes
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/api/portfolio/search', [PortfolioController::class, 'search'])->name('portfolio.search');



// Additional routes for other pages
Route::get('/about', function () {
    return view('pages.aboutpage');
})->name('about');

Route::get('/services', function () {
    return view('pages.servicepage');
})->name('services');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/news', function () {
    return view('pages.news-events');
})->name('news');

Route::get('/news-detail', function () {
    return view('pages.news-detail');
})->name('news-detail');

Route::get('/service-detail', function () {
    return view('pages.servicedetail');
})->name('service-detail');





// Newsletter subscription route (optional)
Route::post('/newsletter/subscribe', function () {
    // Handle newsletter subscription logic here
    return back()->with('success', 'Thank you for subscribing to our newsletter!');
})->name('newsletter.subscribe');

Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Service Category Page
Route::get('/services/category/{category}', [ServiceController::class, 'category'])->name('services.category');

// Service Detail Page (Subcategory)
Route::get('/services/detail/{subcategory}', [ServiceController::class, 'detail'])->name('services.detail');

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/subscribe/{plan}', function ($plan) {
    return view('services.subscribe', ['plan' => $plan]);
});

Route::post('/subscribe/process', function (Illuminate\Http\Request $request) {
    // handle subscription logic (email, DB insert, payment etc.)
    return redirect('/')->with('success', 'Subscription successful! Thank you.');
});

Route::get('/hi', function () {
    return view('hi');
});