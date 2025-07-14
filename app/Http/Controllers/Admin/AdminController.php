<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\News;
use App\Models\Portfolio;
use App\Models\ContactMessage;
use App\Models\Subscriber;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard with data.
     */
    public function index()
    {
        // Get the counts for the stat cards from the database
        $newsCount = News::count();
        $portfolioCount = Portfolio::count();
        $messageCount = ContactMessage::count();
        $subscriberCount = Subscriber::count();

        // Pass all the count variables to the view
        return view('admin.dashboard', compact(
            'newsCount',
            'portfolioCount',
            'messageCount',
            'subscriberCount'
        ));
    }
}