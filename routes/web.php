<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController as PublicPortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsDisplayController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\ServiceadminController; // <-- Import the controller

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\SubscriberController as AdminSubscriberController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\ServiceRequestController; // <-- Import the controller

//

Route::get('/admin/test', [AdminPortfolioController::class, 'create']);

// Public routes (visible to anyone)
// --------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', fn() => view('pages.aboutpage'))->name('about');
Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{category}/{slug}', [ProductController::class, 'show'])->name('products.detail');

// Portfolio (public)
Route::get('/portfolio', [PublicPortfolioController::class, 'index'])->name('portfolio');

// News (public)
Route::get('/news', [NewsDisplayController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsDisplayController::class, 'show'])->name('news.show');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/category/{category}', [ServiceController::class, 'category'])->name('services.category');
Route::get('/services/detail/{subcategory}', [ServiceController::class, 'detail'])->name('services.detail');
Route::post('/quote/request', [ServiceController::class, 'requestQuote'])->name('quote.request');
Route::post('/request-a-quote', [ServiceRequestController::class, 'store'])->name('quote.request.store');

// Contact & messages
Route::post('/contact-message', [MessageController::class, 'store'])->name('message.store');
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

// Subscriptions
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
Route::get('/subscribe/{plan}', fn($plan) => view('services.subscribe', ['plan' => $plan]));
Route::post('/subscribe/process', fn() => redirect('/')->with('success', 'Subscription successful! Thank you.'));

// Newsletter sending
Route::get('/send-newsletter', [NewsletterController::class, 'sendNewsletter']);

//



// Auth routes (Laravel Breeze)
// --------------------------------------------------
// AFTER THE CHANGE
Route::middleware('auth')->group(function () {
    // We removed the old dashboard route.
    // The profile routes are still here and will work perfectly.
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

//
// Admin-only routes
// --------------------------------------------------
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Admin dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Admin Portfolio
    Route::get('/portfolio', [AdminPortfolioController::class, 'adminIndex'])->name('portfolio.index');
    Route::get('/portfolio/create', [AdminPortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio', [AdminPortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/{id}/edit', [AdminPortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/{id}', [AdminPortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/{id}', [AdminPortfolioController::class, 'destroy'])->name('portfolio.destroy');

    // Admin News
    Route::get('/news', [AdminNewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [AdminNewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [AdminNewsController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [AdminNewsController::class, 'destroy'])->name('news.destroy');

    // Subscribers
    Route::resource('subscribers', AdminSubscriberController::class)->only(['index']);

    // Contact messages
    Route::resource('contact-messages', ContactMessageController::class)->only(['index']);
//service admin
  
Route::prefix('admin')->group(function () {
    Route::resource('services', ServiceadminController::class);

// Admin services
    Route::get('/services', [ServiceadminController::class, 'index'])->name('admin.services.index');
    Route::get('/services/create', [ServiceadminController::class, 'create'])->name('admin.services.create');
    Route::post('/services', [ServiceadminController::class, 'store'])->name('admin.services.store');
    Route::get('/services/{services}/edit', [ServiceadminController::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/{services}', [ServiceadminController::class, 'update'])->name('admin.services.update');
Route::delete('/services/{services}', [ServiceadminController::class, 'destroy'])->name('admin.services.destroy');

});
    
});



Route::post('/chat-submit', [HomeController::class, 'submitChatMessage'])->name('chat.submit');


//
// Auth scaffolding
// --------------------------------------------------
require __DIR__.'/auth.php';
