<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsDisplayController;
use App\Http\Controllers\PortfolioController as PublicPortfolioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route to get latest news
Route::get('/news/latest', [NewsDisplayController::class, 'apiLatest']);

// You can add more API routes here if needed



Route::get('/portfolios/latest', [PublicPortfolioController::class, 'apiLatest']);
