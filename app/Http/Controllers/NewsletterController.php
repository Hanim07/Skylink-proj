<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;



use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Here you can handle the actual logic, e.g. saving to database or mailing list

        // Example: flash message and redirect
        return redirect()->back()->with('success', 'Thanks for subscribing!');
    }
}
