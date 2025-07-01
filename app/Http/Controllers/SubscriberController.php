<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;


class SubscriberController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|unique:subscribers,email',
    ]);

    Subscriber::create($validated);

    return back()->with('success', 'Thank you for subscribing!');
}
}
