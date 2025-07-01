<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;


class PortfolioDisplayController extends Controller
{
    public function index()
{
    $portfolios = Portfolio::latest()->paginate(5);
    return view('portfolio.index', compact('portfolios'));
}

}
