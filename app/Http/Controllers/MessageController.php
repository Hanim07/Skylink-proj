<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use App\Mail\UserMessage;



class MessageController extends Controller
{
     public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Store the message in the database
        $message = Message::create($validated);

        // Send the message via email to a specific address
        Mail::to('info@skylinktech.com')->send(new UserMessage($message));

        // Respond to frontend with a success message (for AJAX or form feedback)
        return response()->json([
            'success' => true,
            'message' => 'Thanks for your message! We’ll get back to you soon.',
        ]);
    }
}
