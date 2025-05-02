<?php

namespace App\Mail;  // Correct namespace for mailables

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    // Inject contact data into the Mailable
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    // Build the message
    public function build()
    {
        return $this->subject('FoxGlovesIndia')
                    ->view('frontend.contactmessage');  // Use the Blade view for the email
    }
}

