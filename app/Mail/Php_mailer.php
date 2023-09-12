<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    
class PhpMailerDriver extends Mailable
{
    protected $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);
    }

    public function build()
    {
        // Build your email using PHPMailer methods
        // Example:
        $this->mailer->Subject = 'Subject of your email';
        $this->mailer->Body = 'This is the email content';
        $this->mailer->addAddress('recipient@example.com', 'Recipient Name');
    }

    public function send()
    {
        try {
            // Send the email
            $this->mailer->send();
        } catch (Exception $e) {
            // Handle email sending errors here
            // You can log the exception or throw an error
        }
    }
}


