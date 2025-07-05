<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;




class UserMessage extends Mailable
{
    use Queueable;

    public function __construct(public Message $message) {}

    public function build()
    {
        return $this->subject('New Message from Website')
                    ->markdown('emails.user-message'); // Path to your Blade markdown template
    }
}