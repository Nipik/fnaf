<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ValidationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $validationCode;

    public function __construct($validationCode)
    {
        $this->validationCode = $validationCode;
    }

    public function build()
    {
        return $this->view('emails')
            ->subject('Sister Location')
            ->with(['validationCode' => $this->validationCode]);
    }
}
