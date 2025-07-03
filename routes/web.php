<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController as PublicPortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsDisplayController;
use App\Http\Controllers\PortfolioDisplayController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;



Route::get('/', function () {
    return view('pages.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::post('/quote/request', [ServicesController::class, 'requestQuote'])->name('quote.request');





// Portfolio routes
//Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
//Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
//Route::get('/api/portfolio/search', [PortfolioController::class, 'search'])->name('portfolio.search');
//Route::get('/portfolio', [PortfolioDisplayController::class, 'index'])->name('portfolio.index');



// Public route
Route::get('/portfolio', [PublicPortfolioController::class, 'index'])->name('portfolio');



// Admin routes (optional: protect with auth middleware)
Route::get('/admin/portfolio', [AdminPortfolioController::class, 'adminIndex'])->name('admin.portfolio.index');
Route::get('/admin/portfolio/create', [AdminPortfolioController::class, 'create'])->name('admin.portfolio.create');
Route::post('/admin/portfolio', [AdminPortfolioController::class, 'store'])->name('admin.portfolio.store');
Route::get('/admin/portfolio/{id}/edit', [AdminPortfolioController::class, 'edit'])->name('admin.portfolio.edit');
Route::put('/admin/portfolio/{id}', [AdminPortfolioController::class, 'update'])->name('admin.portfolio.update');
Route::delete('/admin/portfolio/{id}', [AdminPortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');






// Additional routes for other pages
Route::get('/about', function () {
    return view('pages.aboutpage');
})->name('about');

Route::get('/services', function () {
    return view('pages.servicepage');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');



Route::get('/news', function () {
    return view('pages.news-events');
})->name('news');



/*
Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');



Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('portfolios', App\Http\Controllers\Admin\PortfolioController::class);
});




Route::get('/news', function () {
    return view('pages.news-events');
})->name('news');

Route::get('/news-detail', function () {
    return view('pages.news-detail');
})->name('news-detail');

Route::get('/service-detail', function () {
    return view('pages.servicedetail');
})->name('service-detail');


route get::( so the portfolio page is that there is portfolio balde that shows 5 images with title n description
and then but i want to add it the image the title n description using the backend not there rooutes that displayes the portfolio page and alro i have dont the controllers n models so that i can do with backend when i got to the portfolio page its done like satstically what shall i do the header n the footer statich but i wanna add project using backend but i am confused there is no way of adding the projects even if i have wrote the backend controller no button to add it from the static one or idk what do u think i should hande this issue)


// Newsletter subscription route (optional)
//Route::post('/newsletter/subscribe', function () {
    // Handle newsletter subscription logic here
    //return back()->with('success', 'Thank you for subscribing to our newsletter!');
// })->name('newsletter.subscribe');

*/



Route::post('/contact-message', [MessageController::class, 'store'])->name('message.store');

Route::post('/contact', [ContactController::class, 'submit'])->name('message.store');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class);
});

// Route::get('/news', [NewsDisplayController::class, 'index'])->name('news.index');




Route::get('/subscribe', [SubscriberController::class, 'store'])->name('subscriber.store');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('subscribers', App\Http\Controllers\Admin\SubscriberController::class)->only(['index']);
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('contact-messages', ContactMessageController::class)->only(['index']);
});