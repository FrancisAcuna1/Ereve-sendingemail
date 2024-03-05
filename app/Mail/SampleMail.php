<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $message;
    public $attachment;

    public function __construct($name, $email, $message, $attachment = null)
    {
        $this->name = $name;
        $this->email = $email; // Correct variable name
        $this->message = $message;
        $this->attachment = $attachment; // Correct variable name
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sample Mail'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail' // HTML CONTENT OF EMAIL
        );
    }

    public function build()
    {
        $mailView = 'home'; // Correct variable name

        $mail = $this->view($mailView)
            ->subject('Sample Mail');

        if ($this->attachment) {
            $mail->attach($this->attachment->getRealPath(), [
                'as' => $this->attachment->getClientOriginalName(),
                'mime' => $this->attachment->getMimeType()
            ]);
        }

        return $mail;
    }

}
?>