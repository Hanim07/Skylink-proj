<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subscriber; // assuming you have a Subscriber model
use Illuminate\Support\Facades\Validator;


class SubscriptionController extends Controller
{
     public function subscribe(Request $request)
    {
        // Validate email
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Save subscriber
        Subscriber::create([
            'email' => $request->input('email'),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}
