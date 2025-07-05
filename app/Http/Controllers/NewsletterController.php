<?php

// app/Http/Controllers/NewsletterController.php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Mail\NewsLetterMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function sendNewsletter()
    {
        $subscribers = Subscriber::all();

        $content = "Here's the latest news..."; // You can make this dynamic

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsLetterMail($content));
        }

        return 'Newsletter sent!';
    }
}