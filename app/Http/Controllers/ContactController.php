<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMessage;
use App\Models\ContactMessage;
use App\Mail\ContactFormMail;



class ContactController extends Controller
{
     public function submit(Request $request)

    {
         $validated = $request->validate([
         'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'phone'      => 'required|string|max:20',
            'company'    => 'nullable|string|max:255',
            'message'    => 'required|string',
        ]);

        
        $contact = ContactMessage::create($validated);


        // Send to admin email
        Mail::to('info@skylink.com')->send(new ContactFormMail($contact));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
