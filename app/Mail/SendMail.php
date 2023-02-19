<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Webup\LaravelSendinBlue\SendinBlue; // <- you need this
use Webup\LaravelSendinBlue\SendinBlueTransport; // <- you need this

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    use SendinBlue; // <- add this trait

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($getotp)
    {
        //
        $this->otp = $getotp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('layouts.mailTemp')
        ->with([
            'otp' => $this->otp,
        ]);
        // return $this->view('view.name');
    }
}
