<?php

namespace App\Mail;

use App\Models\LoanApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationStatusLink extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public LoanApplication $application;
    public string $statusUrl;

    public function __construct(LoanApplication $application, string $statusUrl)
    {
        $this->application = $application;
        $this->statusUrl = $statusUrl;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Harborwell Finance reference number',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.application-status-link',
            text: 'emails.application-status-link-text',
        );
    }
}
