<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class NewsLetterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content; // data passed to the email

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function build()
    {
        return $this->view('emails.newsletter')
                    ->with(['content' => $this->content]);
    }
}