<?php 

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Enquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry; 
    public $service;

 
    public function __construct($enquiry,$service)
    {
        $this->enquiry = $enquiry;
        $this->service = $service;
    }


    public function build()
    {
        return $this->subject('Thank you for your enquiry!')
                    ->view('emails.enquiry_email');  
    }
}
