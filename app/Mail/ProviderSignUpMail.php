<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProviderSignUpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($provider)
    {
        $this->details = [
            'name' => $provider->name,
            'company_name' => $provider->company_name ?? '',
            'email' => $provider->email,
            'contact_number' => $provider->contact_number,
            'address' => $provider->address,  
        ];
        
    }

    public function build()
    {
        $email = $this->subject('New Provider Signup')
                    ->view('emails.providersignup')
                    ->with('details', $this->details);

        return $email;
    }
}
