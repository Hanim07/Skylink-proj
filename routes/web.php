<?php

use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::post('/quote/request', [ServicesController::class, 'requestQuote'])->name('quote.request');


// Additional routes for other pages
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


// Newsletter subscription route (optional)
Route::post('/newsletter/subscribe', function () {
    // Handle newsletter subscription logic here
    return back()->with('success', 'Thank you for subscribing to our newsletter!');
})->name('newsletter.subscribe');
