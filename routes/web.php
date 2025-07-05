<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController as PublicPortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsDisplayController;
use App\Http\Controllers\SubscriptionController;

use App\Http\Controllers\PortfolioDisplayController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\AdminNewsController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\NewsletterController;


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::post('/quote/request', [ServiceController::class, 'requestQuote'])->name('quote.request');





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
Route::get('/products', function () {
    return view('pages.products');
})->name('products');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');



Route::get('/news', [NewsDisplayController::class, 'index'])->name('news.index');

Route::get('/news/{slug}', [NewsDisplayController::class, 'show'])->name('news.show');




//Route::prefix('admin')->middleware(['auth'])->group(function () {
Route::prefix('admin')->group(function () {

    Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{id}/edit', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{id}', [AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{id}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');

});



Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{category}/{slug}', [ProductController::class, 'show'])->name('products.detail');



/*
Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');



Route::get('/news', function () {
    return view('pages.news-events');
})->name('news');

Route::get('/news-detail', function () {
    return view('pages.news-detail');
})->name('news-detail');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('portfolios', App\Http\Controllers\Admin\PortfolioController::class);
});




Route::get('/news', function () {
    return view('pages.news-events');
})->name('news');



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






Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('contact-messages', ContactMessageController::class)->only(['index']);

});


// Route::get('/news', [NewsDisplayController::class, 'index'])->name('news.index');




Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

Route::get('/send-newsletter', [NewsletterController::class, 'sendNewsletter']);




Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('subscribers', App\Http\Controllers\Admin\SubscriberController::class)->only(['index']);
});

Route::get('/subscribe/{plan}', function ($plan) {
    return view('services.subscribe', ['plan' => $plan]);
});

Route::post('/subscribe/process', function (Illuminate\Http\Request $request) {
    // handle subscription logic (email, DB insert, payment etc.)
    return redirect('/')->with('success', 'Subscription successful! Thank you.');
});



Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');










Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Service Category Page
Route::get('/services/category/{category}', [ServiceController::class, 'category'])->name('services.category');

// Service Detail Page (Subcategory)
Route::get('/services/detail/{subcategory}', [ServiceController::class, 'detail'])->name('services.detail');






Route::get('/hi', function () {
    return view('hi');
});