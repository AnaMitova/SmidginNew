<?php

namespace App\Mail;

use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * Confirmation sent right after someone subscribes through the popup —
 * it repeats the discount code so they still have it after closing the tab.
 */
class SubscriberWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Subscriber $subscriber,
        public string $discountText,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to Smidgin — ' . $this->discountText . ' your first order',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.subscriber-welcome',
            text: 'emails.subscriber-welcome-text',
        );
    }
}
