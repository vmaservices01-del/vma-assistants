<?php

namespace App\Mail;

use App\Models\FormSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class AdminDiscoveryCallNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;

    public function __construct(FormSubmission $submission)
    {
        // Pass the database record to the email
        $this->submission = $submission;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Discovery Call Request: ' . ($this->submission->data['practice_name'] ?? 'New Lead'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.admin_notification', // We will create this view next
        );
    }
}